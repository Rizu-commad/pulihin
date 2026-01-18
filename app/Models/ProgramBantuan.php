<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class ProgramBantuan extends Model
{
    protected $table = 'program_bantuans';
    protected $primaryKey = 'id_program';
    
    protected $fillable = [
        'nama_program',
        'jenis_bantuan',
        'tanggal_mulai',
        'tanggal_selesai',
        'keterangan',
        'target_dana',
        'dana_terkumpul',
        'status',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'target_dana' => 'decimal:2',
        'dana_terkumpul' => 'decimal:2',
    ];

    // Relasi ke Donasi
    public function donasis()
    {
        return $this->hasMany(Donasi::class, 'id_program', 'id_program');
    }

    // Relasi ke Penyaluran
    public function penyalurans()
    {
        return $this->hasMany(Penyaluran::class, 'id_program', 'id_program');
    }

    // Get persentase dana terkumpul
    public function getPersentaseDanaTerkumpulAttribute()
    {
        if ($this->target_dana == 0) {
            return 0;
        }
        return ($this->dana_terkumpul / $this->target_dana) * 100;
    }

    // Get total dana dari donasi berhasil
    public function updateDanaTerkumpul()
    {
        try {
            $total = $this->donasis()
                ->where('status_pembayaran', 'berhasil')
                ->sum('jumlah_donasi');
            
            $this->update(['dana_terkumpul' => $total]);
            
            // Log the update
            Log::info('Dana terkumpul updated', [
                'id_program' => $this->id_program,
                'nama_program' => $this->nama_program,
                'dana_terkumpul' => $total
            ]);
            
            return $total;
        } catch (\Exception $e) {
            Log::error('Error updating dana terkumpul', [
                'id_program' => $this->id_program,
                'error' => $e->getMessage()
            ]);
            
            return $this->dana_terkumpul; // Return existing value on error
        }
    }

    // Get total bantuan tersalurkan
    public function getTotalTersalurkanAttribute()
    {
        return $this->penyalurans()->sum('jumlah_disalurkan');
    }

    // Scope untuk program aktif
    public function scopeAktif($query)
    {
        return $query->where('status', 'aktif');
    }

    // Scope untuk program selesai
    public function scopeSelesai($query)
    {
        return $query->where('status', 'selesai');
    }
}
