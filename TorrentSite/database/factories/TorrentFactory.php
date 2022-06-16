<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TorrentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->biasedNumberBetween(1, 5),
            'user_id' => $this->faker->biasedNumberBetween(1,50),
            'title' => $this->faker->text(100),
            'description' => $this->faker->text(),
            'torrent' => "uploads/torrents/_default.md"
        ];
    }
}
