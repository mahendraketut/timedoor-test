<?php

namespace Database\Seeders;

use App\Models\Author;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // If this seeder can't produce 1,000 data entries in the database,
        // you can try generating data in smaller quantities.
        // For example, 10, 50, 100, 1000, etc.
        // Then attempt to increase the value accordingly.
        // Note: remember to change the range of the author id (BookFactory.php: line 24)
        // to match the number of authors you have in your database (e.g. (1,1000) or (1,100))
        // if you are trying to adjust the amount of data to be generated.
        Author::factory(1000)->create();
    }
}
