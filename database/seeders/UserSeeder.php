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
     */
    public function run(): void
    {
        // $anggota = [
            // 'KUSMANTO', 'MUHAMMAD LUTFI N. ,S.H.', 'ERLANGGA SETYANA PUTRA', 'DENDI AGUSTIANTO', 'SUPARNO', 'GUNARDI BAGAS WAHYU PRASETYO', 'MAHARDHIQA QAHAR MUZAKKA',
            // 'KARTONO', 'PRASTAWA SUCI PAMILIH', 'DWIKA MAULANA AL BASYR', 'MUHAMMAD ABDUL BASHIR '
        // ];
        $users = [[
            'fullname'   => 'Admin',
            'email'      => 'admin@mail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => null,
            'position'   => null,
            'role'       => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Anggota 1',
            'email'      => 'anggota1@mail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Gold 1',
            'position'   => 'Duelist',
            'role'       => 'anggota',
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Pimpinan',
            'email'      => 'pimpinan@mail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => null,
            'position'   => null,
            'role'       => 'pimpinan',
            'created_at' => now(),
            'updated_at' => now(),
        ]];

        User::insert($users);
    }
}
