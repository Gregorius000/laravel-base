<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $transaction = Transaction::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();

        return [
            'total' => fake()->numberBetween(1, 5),
            'transaction_id' => $transaction->id,
            'user_id' => $user->id,
            'product_id' => $product->id,
        ];
    }
}
