<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Showtime;

class ShowtimeSeeder extends Seeder
{
    public function run(): void
    {
        Showtime::insert([
            [
                'movie_id' => 1,
                'room_id' => 1,
                'start_time' => '2025-10-16 10:00:00',
                'price' => 90000,
            ],
            [
                'movie_id' => 2,
                'room_id' => 2,
                'start_time' => '2025-10-16 14:00:00',
                'price' => 100000,
            ],
            [
                'movie_id' => 3,
                'room_id' => 3,
                'start_time' => '2025-10-17 18:00:00',
                'price' => 80000,
            ],
        ]);
    }
}
