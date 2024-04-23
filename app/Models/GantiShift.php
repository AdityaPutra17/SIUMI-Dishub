<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiShift extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_user_uploader',
        'id_jadwal',
        'id_shift',
        'ket'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id' );
    }
    public function uploader()
    {
        return $this->belongsTo(User::class, 'id_user_uploader', 'id' );
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class, 'id_shift');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

}
