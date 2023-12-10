<?php

namespace Database\Factories;

use App\Models\BookCategory;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookCategory>
 */
class BookCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Science Fiction', 'Fantasy', 'Mystery', 'Romance', 'Thriller', 'Non-fiction', 'Historical Fiction', 'Biography', 'Self-Help'];

        $name = $this->faker->randomElement($categories);

        return [
            'name' => $name,
            'slug' => $this->faker->slug,
        ];
    }
}
