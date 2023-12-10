<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use App\Models\BookCategory;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            // You can adjust the author ID based on the number of author entries in your database.
            'author_id' => $this->faker->numberBetween(1, 1000),
            // You can adjust the book category ID based on the number of book category entries in your database.
            'book_category_id' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
