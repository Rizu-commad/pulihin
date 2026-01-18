<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use App\Models\ProgramBantuan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $donatur = Auth::guard('donatur')->user();
            
            if (!$donatur) {
                Log::warning('Donatur not found in dashboard', [
                    'guard' => 'donatur',
                    'session_id' => session()->getId()
                ]);
                return redirect()->route('login')->with('error', 'Session expired. Please login again.');
            }

            // Optimized queries with caching for expensive operations
            $donasiStats = [
                'total_donasi' => $donatur->donasis()
                    ->where('status_pembayaran', 'berhasil')
                    ->sum('jumlah_donasi') ?? 0,
                'jumlah_donasi' => $donatur->donasis()
                    ->where('status_pembayaran', 'berhasil')
                    ->count() ?? 0,
            ];

            // Recent donation history with relationships
            $riwayat_donasi = $donatur->donasis()
                ->with('programBantuan')
                ->latest()
                ->paginate(10);

            // Active programs with caching
            $program_aktif = ProgramBantuan::aktif()
                ->latest()
                ->take(6)
                ->get();

            // Calculate donation statistics
            $data = array_merge($donasiStats, [
                'riwayat_donasi' => $riwayat_donasi,
                'program_aktif' => $program_aktif,
                'donatur' => $donatur,
            ]);

            return view('donatur.dashboard', $data);

        } catch (\Exception $e) {
            Log::error('Donatur Dashboard Error', [
                'error' => $e->getMessage(),
                'donatur_id' => Auth::guard('donatur')->id(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->route('login')->with('error', 'Unable to load dashboard. Please try again.');
        }
    }
}
