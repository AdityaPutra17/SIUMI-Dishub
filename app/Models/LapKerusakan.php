<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LapKerusakan extends Model
{
    use HasFactory;

    protected $table = 'lap_kerusakan';

    protected $fillable=[
        'id','id_user', 'nama_brg', 'gmbr_brg', 'ket'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
