<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Train::truncate();

        for ($i=0; $i < 50; $i++) { 
           $train = new Train();
           $train->company = fake()->company();
           $train->departure_station = fake()->city();
           $train->arrival_station = fake()->city();
           $train->departure_time = fake()->time();
           $train->arrival_time = fake()->time();
           $train->train_code = fake()->randomNumber(8, true);
           $train->carriage_number = fake()->randomDigitNotNull();
           $train->in_time = fake()->boolean();
           $train->canceled = $train->in_time ? false : fake()->boolean();
           $train->save();
        }
    }
}
