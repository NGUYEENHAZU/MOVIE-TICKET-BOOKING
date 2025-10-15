<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::insert([
            [
                'title' => 'Avengers: Endgame',
                'description' => 'Trận chiến cuối cùng giữa các siêu anh hùng Marvel và Thanos.',
                'genre' => 'Hành động, Khoa học viễn tưởng',
                'duration' => 181,
                'rating' => 'PG-13',
                'release_date' => '2019-04-26',
                'poster_url' => 'https://image.tmdb.org/t/p/w500/or06FN3Dka5tukK1e9sl16pB3iy.jpg'
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'description' => 'Peter Parker đối mặt với đa vũ trụ cùng Doctor Strange.',
                'genre' => 'Phiêu lưu, Hành động',
                'duration' => 148,
                'rating' => 'PG-13',
                'release_date' => '2021-12-17',
                'poster_url' => 'https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg'
            ],
            [
                'title' => 'Inside Out 2',
                'description' => 'Những cảm xúc mới xuất hiện trong tâm trí Riley khi cô bé lớn lên.',
                'genre' => 'Hoạt hình, Gia đình',
                'duration' => 100,
                'rating' => 'G',
                'release_date' => '2024-06-14',
                'poster_url' => 'https://image.tmdb.org/t/p/w500/gMB8vgON70eY5QhQvF1FmbpZbYt.jpg'
            ],
        ]);
    }
}
