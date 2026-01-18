<?php

namespace App\Http\Controllers\Korban;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $korban = Auth::guard('korban')->user();
            
            if (!$korban) {
                Log::warning('Korban not found in dashboard', [
                    'guard' => 'korban',
                    'session_id' => session()->getId()
                ]);
                return redirect()->route('login')->with('error', 'Session expired. Please login again.');
            }

            // Optimized queries with proper error handling
            $total_bantuan = $korban->penyalurans()
                ->whereNotNull('foto_bukti') // Only count completed distributions
                ->sum('jumlah_disalurkan') ?? 0;

            // Recent aid history with relationships
            $riwayat_bantuan = $korban->penyalurans()
                ->with(['programBantuan', 'volunteer'])
                ->latest()
                ->paginate(10);

            // Needs/requirements with validation
            $kebutuhan = $korban->kebutuhanKorbans()
                ->latest()
                ->get();

            // Status-based messaging
            $status_message = match($korban->status_verifikasi) {
                'terverifikasi' => 'Akun Anda telah terverifikasi. Anda dapat menerima bantuan.',
                'pending' => 'Akun Anda sedang dalam proses verifikasi.',
                'menunggu' => 'Akun Anda menunggu verifikasi dari admin.',
                'ditolak' => 'Akun Anda ditolak. Silakan hubungi admin.',
                default => 'Status verifikasi tidak diketahui.'
            };

            $data = [
                'status_verifikasi' => $korban->status_verifikasi,
                'status_message' => $status_message,
                'total_bantuan' => $total_bantuan,
                'riwayat_bantuan' => $riwayat_bantuan,
                'kebutuhan' => $kebutuhan,
                'korban' => $korban,
                'jumlah_kebutuhan' => $kebutuhan->count(),
                'bantuan_diterima' => $riwayat_bantuan->count(),
            ];

            return view('korban.dashboard', $data);

        } catch (\Exception $e) {
            Log::error('Korban Dashboard Error', [
                'error' => $e->getMessage(),
                'korban_id' => Auth::guard('korban')->id(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->route('login')->with('error', 'Unable to load dashboard. Please try again.');
        }
    }

    public function riwayatBantuan()
    {
        try {
            $korban = Auth::guard('korban')->user();
            
            if (!$korban) {
                return redirect()->route('login')->with('error', 'Session expired. Please login again.');
            }

            // Detailed aid history with filters
            $bantuan = $korban->penyalurans()
                ->with(['programBantuan', 'volunteer'])
                ->latest()
                ->paginate(15);

            // Statistics for the history page
            $stats = [
                'total_bantuan' => $korban->penyalurans()
                    ->whereNotNull('foto_bukti')
                    ->sum('jumlah_disalurkan') ?? 0,
                'jumlah_program' => $korban->penyalurans()
                    ->distinct('id_program')
                    ->count(),
                'volunteer_terlibat' => $korban->penyalurans()
                    ->distinct('id_volunteer')
                    ->count(),
            ];

            return view('korban.bantuan.index', compact('bantuan', 'stats', 'korban'));

        } catch (\Exception $e) {
            Log::error('Korban Riwayat Bantuan Error', [
                'error' => $e->getMessage(),
                'korban_id' => Auth::guard('korban')->id(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->route('korban.dashboard')->with('error', 'Unable to load aid history. Please try again.');
        }
    }
}
