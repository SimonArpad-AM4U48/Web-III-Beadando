<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['title' => 'Games']);
        Category::create(['title' => 'Programs']);
        Category::create(['title' => 'Books']);
        Category::create(['title' => 'Movies']);
        Category::create(['title' => 'Music']);
    }
}
