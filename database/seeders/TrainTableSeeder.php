<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for( $i = 0; $i <= 200; $i++){

            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->date();
            $new_train->arrival_time = $faker->date();
            $new_train->train_id = $faker->ean13();
            $new_train->train_carriage = $faker->randomDigitNotNull(1,10);
            $new_train->in_time = $faker->randomElement(['In Orario', 'In Ritardo', 'Arrivato']);
            $new_train->cancelled = $faker->randomElement(['YES', 'NO']);
            $new_train->save();

        }
    }
}
