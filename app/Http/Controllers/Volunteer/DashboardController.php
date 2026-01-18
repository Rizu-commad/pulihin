<?php

namespace App\Http\Controllers\Volunteer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Penyaluran;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $volunteer = Auth::guard('volunteer')->user();
            
            if (!$volunteer) {
                Log::warning('Volunteer not found in dashboard', [
                    'guard' => 'volunteer',
                    'session_id' => session()->getId()
                ]);
                return redirect()->route('login')->with('error', 'Session expired. Please login again.');
            }

            // Optimized single query for volunteer statistics
            $volunteerStats = $volunteer->penyalurans()
                ->selectRaw('
                    COUNT(*) as jumlah_penyaluran,
                    COALESCE(SUM(jumlah_disalurkan), 0) as total_bantuan_disalurkan
                ')
                ->first();

            // Recent distributions with relationships
            $penyaluran_terbaru = $volunteer->penyalurans()
                ->with(['korban', 'programBantuan'])
                ->latest()
                ->take(10)
                ->get();

            // Monthly statistics
            $penyaluran_bulan_ini = $volunteer->penyalurans()
                ->bulanIni()
                ->count();

            // Performance metrics
            $data = [
                'jumlah_penyaluran' => $volunteerStats->jumlah_penyaluran ?? 0,
                'total_bantuan_disalurkan' => $volunteerStats->total_bantuan_disalurkan ?? 0,
                'penyaluran_terbaru' => $penyaluran_terbaru,
                'penyaluran_bulan_ini' => $penyaluran_bulan_ini,
                'volunteer' => $volunteer,
                'rata_rata_penyaluran' => $volunteerStats->jumlah_penyaluran > 0 
                    ? round($volunteerStats->total_bantuan_disalurkan / $volunteerStats->jumlah_penyaluran, 2)
                    : 0,
            ];

            return view('volunteer.dashboard', $data);

        } catch (\Exception $e) {
            Log::error('Volunteer Dashboard Error', [
                'error' => $e->getMessage(),
                'volunteer_id' => Auth::guard('volunteer')->id(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->route('login')->with('error', 'Unable to load dashboard. Please try again.');
        }
    }

    public function tugas()
    {
        try {
            $volunteer = Auth::guard('volunteer')->user();
            
            if (!$volunteer) {
                return redirect()->route('login')->with('error', 'Session expired. Please login again.');
            }

            // Get pending tasks and upcoming distributions
            $tugas_pending = $volunteer->penyalurans()
                ->where('tanggal_penyaluran', '>=', now())
                ->whereNull('foto_bukti') // Assuming null foto_bukti means not completed
                ->with(['korban', 'programBantuan'])
                ->orderBy('tanggal_penyaluran')
                ->get();

            $tugas_selesai = $volunteer->penyalurans()
                ->whereNotNull('foto_bukti')
                ->with(['korban', 'programBantuan'])
                ->latest()
                ->take(5)
                ->get();

            return view('volunteer.tugas', compact('volunteer', 'tugas_pending', 'tugas_selesai'));

        } catch (\Exception $e) {
            Log::error('Volunteer Tugas Error', [
                'error' => $e->getMessage(),
                'volunteer_id' => Auth::guard('volunteer')->id(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->route('volunteer.dashboard')->with('error', 'Unable to load tasks. Please try again.');
        }
    }
}
