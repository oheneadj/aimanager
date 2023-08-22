<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Finance>
 */
class FinanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'amount' => fake()->randomFloat(2, 10, 100),
            'description' => fake()->sentence(6, true),
            'income_or_expense' => 'expense',
            'user_id' => '1'
        ];
    }
}
