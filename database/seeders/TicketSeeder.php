<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        Ticket::insert([
            [
                'order_id' => 1,
                'seat_code' => 'A1',
                'qr_code' => 'QR001',
                'is_used' => false,
            ],
            [
                'order_id' => 1,
                'seat_code' => 'A2',
                'qr_code' => 'QR002',
                'is_used' => false,
            ],
            [
                'order_id' => 2,
                'seat_code' => 'B5',
                'qr_code' => 'QR003',
                'is_used' => true,
            ],
        ]);
    }
}
