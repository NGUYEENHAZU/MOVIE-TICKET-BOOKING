<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        Room::insert([
            ['cinema_id' => 1, 'name' => 'Phòng 1 - 4DX', 'seat_rows' => 10, 'seat_columns' => 12],
            ['cinema_id' => 1, 'name' => 'Phòng 2 - IMAX', 'seat_rows' => 8,  'seat_columns' => 10],
            ['cinema_id' => 2, 'name' => 'Phòng 3 - Standard', 'seat_rows' => 9, 'seat_columns' => 11],
        ]);
    }
}