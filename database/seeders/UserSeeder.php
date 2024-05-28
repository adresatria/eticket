<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 1, //admin
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'nama' => 'kepala petugas',
            'email' => 'kepala@gmail.com',
            'password' => Hash::make('password'),
            'role' => 2, //kepala
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'nama' => 'bendahara',
            'email' => 'bendaharabendahara@gmail.com',
            'password' => Hash::make('password'),
            'role' => 3, //bendahara
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'nama' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('password'),
            'role' => 4, //petugas
            'remember_token' => Str::random(60),
        ]);

        User::create([        
            'nama' => 'pengunjung',
            'email' => 'pengunjung@gmail.com',
            'password' => Hash::make('password'),
            'role' => 5, //pengunjung
            'remember_token' => Str::random(60),
        ]);
    }
}
     