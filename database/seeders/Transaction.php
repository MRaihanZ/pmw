<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class Transaction extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Instantiate Faker
        $faker = Faker::create();

        $startID = 1;
        // Loop to insert multiple records (e.g., 10 records)
        for ($i = 0; $i < 10; $i++) {
            DB::table('transactions')->insert([
                'id' => $startID++,
                'amount' => $faker->randomFloat(2, 10, 1000), // Random amount between 10 and 1000
                'date' => $faker->date(), // Random date
                'category' => $faker->word(), // Random category (can be customized)
                'type' => $faker->randomElement(['income', 'expense']), // Random type, can be 'debit' or 'credit'
                'description' => $faker->sentence(), // Random description
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
            ]);
        }
    }
}
