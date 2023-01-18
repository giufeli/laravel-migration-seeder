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
        $element = [];

        foreach ($element as $trains) {
            $train = new trains();
            $train->train_code = rand(25000, 70000);
            $train->save();
        }
    }
}
