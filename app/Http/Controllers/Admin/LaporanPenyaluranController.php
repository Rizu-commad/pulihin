<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyaluran;
use App\Models\ProgramBantuan;
use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LaporanPenyaluranController extends Controller
{
    public function index()
    {
        try {
            // Get statistics
            $stats = [
                'total_penyaluran' => Penyaluran::count(),
                'total_jumlah' => Penyaluran::sum('jumlah_disalurkan'),
                'bulan_ini' => Penyaluran::whereMonth('tanggal_penyaluran', now()->month)->count(),
                'program_aktif' => ProgramBantuan::aktif()->count(),
            ];

            // Recent distributions
            $penyalurans = Penyaluran::with(['programBantuan', 'korban', 'volunteer'])
                ->latest()
                ->take(10)
                ->get();

            // Monthly trends
            $monthly_trends = Penyaluran::selectRaw('
                    MONTH(tanggal_penyaluran) as month,
                    YEAR(tanggal_penyaluran) as year,
                    COUNT(*) as count,
                    SUM(jumlah_disalurkan) as total
                ')
                ->whereYear('tanggal_penyaluran', now()->year)
                ->groupBy('month', 'year')
                ->orderBy('month')
                ->get();

            return view('admin.laporan.penyaluran', compact('stats', 'penyalurans', 'monthly_trends'));

        } catch (\Exception $e) {
            Log::error('Laporan Penyaluran Error', ['error' => $e->getMessage()]);
            return back()->with('error', 'Gagal memuat laporan penyaluran');
        }
    }

    public function exportExcel()
    {
        try {
            $penyalurans = Penyaluran::with(['programBantuan', 'korban', 'volunteer'])
                ->latest()
                ->get();

            $filename = 'laporan_penyaluran_' . date('Y-m-d') . '.csv';
            
            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ];

            $callback = function() use ($penyalurans) {
                $file = fopen('php://output', 'w');
                
                // CSV Header
                fputcsv($file, [
                    'ID Penyaluran',
                    'Program Bantuan',
                    'Korban',
                    'Volunteer',
                    'Tanggal Penyaluran',
                    'Jumlah Disalurkan',
                    'Keterangan'
                ]);
                
                // CSV Data
                foreach ($penyalurans as $penyaluran) {
                    fputcsv($file, [
                        $penyaluran->id_penyaluran,
                        $penyaluran->programBantuan->nama_program ?? '-',
                        $penyaluran->korban->nama_korban ?? '-',
                        $penyaluran->volunteer->nama_volunteer ?? '-',
                        $penyaluran->tanggal_penyaluran ? $penyaluran->tanggal_penyaluran->format('d/m/Y') : '-',
                        number_format((float)$penyaluran->jumlah_disalurkan, 0, ',', '.'),
                        $penyaluran->keterangan
                    ]);
                }
                
                fclose($file);
            };

            return response()->stream($callback, 200, $headers);

        } catch (\Exception $e) {
            Log::error('Export CSV Error', ['error' => $e->getMessage()]);
            return back()->with('error', 'Gagal export data ke CSV');
        }
    }

    public function print()
    {
        try {
            $penyalurans = Penyaluran::with(['programBantuan', 'korban', 'volunteer'])
                ->latest()
                ->get();

            $stats = [
                'total_penyaluran' => $penyalurans->count(),
                'total_jumlah' => $penyalurans->sum('jumlah_disalurkan'),
                'tanggal_cetak' => now()->format('d F Y'),
            ];

            return view('admin.laporan.penyaluran_print', compact('penyalurans', 'stats'));

        } catch (\Exception $e) {
            Log::error('Print Laporan Error', ['error' => $e->getMessage()]);
            return back()->with('error', 'Gagal mencetak laporan');
        }
    }
}
