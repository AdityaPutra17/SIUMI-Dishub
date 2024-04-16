<?php

namespace Database\Seeders;

use App\Models\Shift;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'tgl_lahir' => '1990-01-01', // Contoh tanggal lahir
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'tgl_lahir' => '1990-01-01', // Contoh tanggal lahir
            'role' => 'Security',
        ]);

        Shift::create([
            'nama' => 'pagi',
            'jam_masuk' =>'08:00',
            'jam_keluar'=>'20:00',

        ]);

        Shift::create([
            'nama' => 'malam',
            'jam_masuk' =>'20:00',
            'jam_keluar'=>'08:00',

        ]);
    }
}
