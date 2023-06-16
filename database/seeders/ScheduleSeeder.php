<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::insert([
            [
                'squad_id' => 1,
                'period_id' => 2,
                'week' => 1,
                'day' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],
            [
                'squad_id' => 2,
                'period_id' => 1,
                'week' => 1,
                'day' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],
            [
                'squad_id' => 3,
                'period_id' => 2,
                'week' => 1,
                'day' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],

            [
                'squad_id' => 4,
                'period_id' => 2,
                'week' => 2,
                'day' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],
            [
                'squad_id' => 5,
                'period_id' => 1,
                'week' => 2,
                'day' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],
            [
                'squad_id' => 6,
                'period_id' => 2,
                'week' => 2,
                'day' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],

            [
                'squad_id' => 7,
                'period_id' => 2,
                'week' => 3,
                'day' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],
            [
                'squad_id' => 8,
                'period_id' => 1,
                'week' => 3,
                'day' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],
            [
                'squad_id' => 9,
                'period_id' => 2,
                'week' => 3,
                'day' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => true,
            ],
        ]);
    }
}
