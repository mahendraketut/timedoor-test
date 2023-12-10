<?php

namespace Database\Factories;

use App\Models\Rating;
use App\Models\Book;

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
        // $bookIds = Book::pluck('id')->toArray();

        return [
            // You can adjust the book ID based on the number of book entries in your database.
            'book_id' => $this->faker->numberBetween(1, 1000),

            'rating' => $this->faker->numberBetween(1, 10),

        ];
    }
}
