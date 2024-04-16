<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];

    public function pengajuan_izin()
    {
        return $this->hasMany(pengajuan_izin::class);
    }
}
