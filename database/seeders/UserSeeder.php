<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::insert([
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'a@example.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Trần Thị B',
                'email' => 'b@example.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Lê Văn C',
                'email' => 'c@example.com',
                'password' => Hash::make('123456'),
            ],
        ]);
    }
}
