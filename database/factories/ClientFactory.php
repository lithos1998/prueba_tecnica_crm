<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $age = rand(18,100);

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'age' => rand(18,100),
            'phone' => rand(1100000000, 1199999999),
            'status' => fake()->boolean(),
            'remember_token' => Str::random(10),
        ];
    }
}
