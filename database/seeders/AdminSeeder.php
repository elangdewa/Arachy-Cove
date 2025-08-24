<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@arachy.com'], // cek email agar tidak dobel
            [
                'name' => 'Admin Arachy',
                'password' => Hash::make('password123'), // ganti dengan password aman
                'role' => 'admin', // pastikan di tabel users ada kolom role
            ]
        );
    }
}
