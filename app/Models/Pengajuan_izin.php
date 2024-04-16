<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_izin extends Model
{
    use HasFactory;
    protected $fillable = [
        'presence_id',
        'status_pengajuan_id',
        'tgl_mulai',
        'tgl_selesai',
        'lampiran',
        'keterangan',
    ];

    public function presensi()
    {
        return $this->belongsTo(Presensi::class);
    }

    public function status_pengajuan()
    {
        return $this->belongsTo(Status_pengajuan::class);
    }
}

