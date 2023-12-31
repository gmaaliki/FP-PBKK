<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserSkill>
 */
class UserSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $skillLevel = [
            'beginner',
            'intermediate',
            'expert',
        ];

        return [
            'skill' => fake()->word(),
            'experience_level' => fake()->randomElement($skillLevel),
            'user_id' => fake()->numberBetween(1,100),
        ];
    }
}
