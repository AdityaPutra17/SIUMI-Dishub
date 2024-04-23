<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanIzin extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'tgl_mulai',
        'tgl_selesai',
        'lampiran',
        'status',
        'keterangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

