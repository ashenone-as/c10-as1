<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Comedy',
            'Science',
            'VideoGames',
            'Trend',
            'Interesting',
            'Discussing movies',
            'Music',
            'Art',
            'Adventure',
            'Travel',

        ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        }
    }
}
