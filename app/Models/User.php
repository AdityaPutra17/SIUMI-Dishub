<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'tgl_lahir',
        'foto'
    ];


    public function reports()
    {
        return $this->hasMany(LapKerusakan::class);
    }
    public function jadwal(){
        return $this->hasOne(Jadwal::class);
    }
    public function presensi(){
        return $this->hasMany(Presensi::class);
    }
    public function pengajuan_izin(){
        return $this->hasMany(pengajuan_izin::class);
    }
    public function gantiShift(){
        return $this->hasMany(ganti_shift::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
