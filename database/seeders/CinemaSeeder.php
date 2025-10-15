<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemaSeeder extends Seeder
{
    public function run(): void
    {
        Cinema::insert([
            [
                'name' => 'CGV Vincom Đồng Khởi',
                'address' => 'Vincom Center, Quận 1, TP.HCM',
                'city' => 'TP.HCM',
                'phone' => '0909123456',
            ],
            [
                'name' => 'Galaxy Nguyễn Du',
                'address' => '116 Nguyễn Du, Quận 1, TP.HCM',
                'city' => 'TP.HCM',
                'phone' => '0909888777',
            ],
            [
                'name' => 'BHD Star Bitexco',
                'address' => '2 Hải Triều, Quận 1, TP.HCM',
                'city' => 'TP.HCM',
                'phone' => '0909555666',
            ],
        ]);
    }
}
