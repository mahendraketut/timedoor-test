<?php

namespace Database\Seeders;

use App\Models\BookCategory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // If this seeder can't produce 3,000 data entries in the database,
        // you can try generating data in smaller quantities.
        // For example, 10, 50, 100, 1000, etc.
        // Then attempt to increase the value accordingly.
        // Note: remember to change the range of the book category id (BookFactory.php: line 25)
        // to match the number of book categories you have in your database (e.g. (1,1000) or (1,100))
        // if you are trying to adjust the amount of data to be generated.
        BookCategory::factory(3000)->create();
    }
}
