<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\Korban;
use App\Models\ProgramBantuan;
use App\Models\Penyaluran;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Optimized queries with single database hits
            $stats = [
                'total_donatur' => Donatur::count(),
                'total_korban' => Korban::count(),
                'korban_pending' => Korban::pending()->count(),
                'total_volunteer' => Volunteer::aktif()->count(),
                'total_program' => ProgramBantuan::count(),
                'program_aktif' => ProgramBantuan::aktif()->count(),
            ];

            // Financial data with proper error handling
            $financial = [
                'total_donasi' => Donasi::berhasil()->sum('jumlah_donasi') ?? 0,
                'total_penyaluran' => Penyaluran::sum('jumlah_disalurkan') ?? 0,
                'donasi_pending' => Donasi::pending()->count(),
            ];

            // Recent activities with relationships loaded
            $donasi_terbaru = Donasi::with(['donatur', 'programBantuan'])
                ->latest()
                ->take(5)
                ->get();

            $penyaluran_terbaru = Penyaluran::with(['korban', 'programBantuan', 'volunteer'])
                ->latest()
                ->take(5)
                ->get();

            // Calculate percentage for progress bars
            $persentase_penyaluran = $financial['total_donasi'] > 0 
                ? ($financial['total_penyaluran'] / $financial['total_donasi']) * 100 
                : 0;

            $data = array_merge($stats, $financial, [
                'donasi_terbaru' => $donasi_terbaru,
                'penyaluran_terbaru' => $penyaluran_terbaru,
                'persentase_penyaluran' => round($persentase_penyaluran, 2),
            ]);

            return view('admin.dashboard', $data);

        } catch (\Exception $e) {
            Log::error('Admin Dashboard Error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            // Fallback data
            return view('admin.dashboard', [
                'total_donatur' => 0,
                'total_korban' => 0,
                'korban_pending' => 0,
                'total_volunteer' => 0,
                'total_program' => 0,
                'program_aktif' => 0,
                'total_donasi' => 0,
                'total_penyaluran' => 0,
                'donasi_pending' => 0,
                'donasi_terbaru' => collect(),
                'penyaluran_terbaru' => collect(),
                'persentase_penyaluran' => 0,
            ]);
        }
    }
}
