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
        $money = Faker::create('id_ID'); // Set locale to Indonesian

        // Generate a random number between 10,000 and 1,000,000 (or any range you prefer)
        $randomAmount = $money->randomNumber(1);

        // Format the number as IDR currency
        $formattedAmount = number_format($randomAmount, 0, ',', '.');

        $startID = 1;
        // Loop to insert multiple records (e.g., 10 records)
        for ($i = 0; $i < 100; $i++) {
            DB::table('transactions')->insert([
                'id' => $startID++,
                'amount' => $money->randomNumber(7), // Random amount between 10 and 1000
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