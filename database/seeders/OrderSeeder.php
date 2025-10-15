<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::insert([
            [
                'user_id' => 1,
                'showtime_id' => 1,
                'quantity' => 2,
                'total_amount' => 180000,
                'payment_method' => 'VNPay',
                'status' => 'success',
            ],
            [
                'user_id' => 2,
                'showtime_id' => 2,
                'quantity' => 1,
                'total_amount' => 100000,
                'payment_method' => 'Momo',
                'status' => 'pending',
            ],
            [
                'user_id' => 3,
                'showtime_id' => 3,
                'quantity' => 3,
                'total_amount' => 240000,
                'payment_method' => 'Tiền mặt',
                'status' => 'success',
            ],
        ]);
    }
}
