<?php

use Faker\Generator as Faker;
use App\Trains;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 5; $i++) {
            $train = new trains();
            $train->company = $faker->company;
            $train->departure_station = $faker->city;
            $train->arrival_station= $faker->city;
            $train->departure_time = $faker->dateTime('now');
            $train->arrival_time = $faker->dateTime('now');
            $train->train_code = rand(25000, 70000);
            $train->number_of_carriages= rand(2, 15);
            $train->in_time = $faker->boolean;
            $train->deleted = $faker->boolean;
            $train->save();
        }
    }
}
