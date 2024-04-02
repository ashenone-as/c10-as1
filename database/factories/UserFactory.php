<?php

namespace Database\Factories;
use Illuminate\Support\Str;

$randomString = Str::random(10);
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'password' => bcrypt('sec4et'),
            'remember_token' => Str::random(10),
        ];
    }
}
