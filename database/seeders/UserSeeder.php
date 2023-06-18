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
        $users = [[
            'fullname'   => 'Admin',
            'email'      => 'admin@mail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => null,
            'position'   => null,
            'role'       => 'admin',
            'squad_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Kusmanto',
            'email'      => 'kusmanto@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Bripka',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'MUHAMMAD LUTFI N. ,S.H.',
            'email'      => 'muhammadlutfi@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Brigadir',
            'position'   => 'Anggota',
            'role'       => 'anggota',
            'squad_id'      => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Suparno',
            'email'      => 'suparno@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Aipda',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Kartono',
            'email'      => 'kartono@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Aipda',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'fullname'   => 'Amat Nasution',
            'email'      => 'amatnasution@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Aipda',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Moh Arif Setiyadi',
            'email'      => 'arifsetiyadi@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Bripka',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Aditya Galih Saputra',
            'email'      => 'adityagalih@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Brigadir',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
             'fullname'   => 'Lucky Artadipha, A.Md',
            'email'      => 'lucky@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Aipda',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'fullname'   => 'Nur Hasim, S.H',
            'email'      => 'nurhasim@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Bripka',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'fullname'   => 'Zaini Mustofa',
            'email'      => 'zaini@gmail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => 'Aipda',
            'position'   => 'Danru',
            'role'       => 'anggota',
            'squad_id'      => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'fullname'   => 'Pimpinan',
            'email'      => 'pimpinan@mail.com',
            'password'   => Hash::make('12345678'),
            'rank'       => null,
            'position'   => null,
            'role'       => 'pimpinan',
            'squad_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]];

        User::insert($users);
    }
}
