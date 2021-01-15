<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory()
            ->count(10)
            ->has(Category::factory()->count(4), 'categories')
            ->create();
    }
}
