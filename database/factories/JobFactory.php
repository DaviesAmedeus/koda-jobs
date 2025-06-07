<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
           'title'=> fake()->jobTitle(),
           'positions' => fake()->numberBetween(1, 25),
           'description'=>'Thank you for considering my application. I am eager for the opportunity to discuss how my background aligns with',
           'salary'=> fake()->randomElement([1000000, 500000, 300000, 1500000]),
           'location'=> fake()->randomElement(['Tanzania', 'Zanzibar', 'Kenya']),
           'type'=> 'Part Time',
           'deadline'=> fake()->dateTime(),
        ];
    }
}
