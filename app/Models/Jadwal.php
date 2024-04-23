<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_user',
        'id_shift',
        'tgl_masuk'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class, 'id_shift');
    }
    public function gantishift()
    {
        return $this->hasOne(GantiShift::class);
    }

    public function presensi()
    {
        return $this->hasOne(Presensi::class);
    }
}
