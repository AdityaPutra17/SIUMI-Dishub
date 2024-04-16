<?php

// app/Models/Mamin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mamin extends Model
{
    use HasFactory;

    protected $table = 'mamins';

    protected $fillable = [
        'name',
        'qty',
        'anggaran',
        'ket',
        'status',
        'jenis',
        'tanggal'
    ];

}
