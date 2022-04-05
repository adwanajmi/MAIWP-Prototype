<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@admin.com",
            'role' => "admin",
            'password' => Hash::make('adminadmin'),

        ]);

        User::create([
            'name' => "Pengesah",
            'email' => "pengesah@pengesah.com",
            'role' => "pengesah",
            'password' => Hash::make('pengesah'),

        ]);

        User::create([
            'name' => "Panel IV",
            'email' => "panel@panel.com",
            'role' => "panel",
            'password' => Hash::make('panelpanel'),

        ]);

        User::create([
            'name' => "Pemohon",
            'email' => "pemohon@pemohon.com",
            'role' => "pemohon",
            'password' => Hash::make('pemohonpemohon'),

        ]);

        User::create([
            'name' => "Pekerja",
            'email' => "pekerja@pekerja.com",
            'role' => "pekerja",
            'password' => Hash::make('pekerjapekerja'),

        ]);
    }
}
