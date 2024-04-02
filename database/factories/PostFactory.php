<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public static function factory()
    {
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::factory();

        return [
            'title' => $faker->sentence(mt_rand(3, 8)), // Random sentence length
            'content' => $faker->paragraphs(mt_rand(2, 5)), // Random paragraph count
            'user_id' => User::factory()->create()->id, // Assuming user creation
            'category_id' => rand(1, 10), // Assuming 10 categories (adjust as needed)
        ];
    }
}
