<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_id',
        'status_hadir',
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
