<?php

namespace Database\Seeders;

use App\Models\Book;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // If this seeder is unable to produce 100,000 entries of fake data in the database,
        // you can try generating data in smaller quantities.
        // For example, 10, 50, 100, 1000, etc.
        // Then attempt to increase the value accordingly.
        // Note: Remember to change the range of the book_id (RatingFactory.php: line 25)
        // to match the number of books you have in your database (e.g. (1,1000) or (1,100))
        // if you are trying to adjust the amount of data to be generated.
        Book::factory(100000)->create();
    }
}
