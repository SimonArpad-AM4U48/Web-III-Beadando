<?php

namespace Database\Seeders;

use App\Models\Torrent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();
        Torrent::factory(500)->create();
        $this->call(CategoriesTableSeeder::class);
    }
}
