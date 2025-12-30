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
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => '#634dd4',
            'background_color' => '#e3e6fc',
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => '#1a9f2a',
            'background_color' => '#ddfbe0',
        ]);

        Category::create([
            'name' => 'Android',
            'slug' => 'android',
        ]);
    }
}
