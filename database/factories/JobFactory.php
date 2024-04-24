<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'description' => fake()->paragraph, // paragraph(3, true)
            'salary' => fake()->numberBetween(5000, 150000),
            'location' => fake()->city,
            'category' => fake()->randomElement([
                'IT',
                'Finance',
                'Salse',
                'Marketing'
            ]),
            'experince' => fake()->randomElement([
                'entry', 'intermediate', 'senior'
            ])
        ];
    }
}
