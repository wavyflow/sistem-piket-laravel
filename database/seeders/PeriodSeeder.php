<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Period::insert([
            [
                'name' => 'Malam',
                'start' => '18:00',
                'end' => '23:00',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name' => 'Pagi',
                'start' => '06:00',
                'end' => '10:00',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
