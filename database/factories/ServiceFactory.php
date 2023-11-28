<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'basic_plan_title' => fake()->sentence(2),
            'basic_plan_price' => 10,
            'basic_plan_description' => fake()->text(50),
            'basic_plan_days' => 7,
            'standard_plan_title' => fake()->sentence(2),
            'standard_plan_price' => 50,
            'standard_plan_description' => fake()->text(50),
            'standard_plan_days' => 14,
            'premium_plan_title' => fake()->sentence(2),
            'premium_plan_price' => 100,
            'premium_plan_description' => fake()->text(50),
            'premium_plan_days' => 21,
            'user_id' => fake()->numberBetween(1,100),
            'subcategory_id' => fake()->numberBetween(1,50),
        ];
    }
}
