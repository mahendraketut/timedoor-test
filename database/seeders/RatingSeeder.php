<?php

namespace Database\Seeders;

use App\Models\Rating;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // If this seeder can't produce 500,000 data entries in the database,
        // you can try generating data in smaller quantities.
        // For example, 10, 50, 100, 1000, etc.
        // Then attempt to increase the value accordingly.
        Rating::factory(500000)->create();
    }
}
