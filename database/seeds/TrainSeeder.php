<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 60; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->word(3, true);
            $newTrain->departure = $faker->word(2, true);
            $newTrain->arrival = $faker->word(2, true);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->code =
                $faker->ean13();
            $newTrain->carriage =
                $faker->numberBetween(4, 8);
            $newTrain->date =
                $faker->date();
            $newTrain->in_time =
                $faker->numberBetween(0, 1);
            $newTrain->deleted =
                $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
