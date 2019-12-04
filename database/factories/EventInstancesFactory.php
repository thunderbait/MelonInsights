<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EventInstance;
use App\Event;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(EventInstance::class, function (Faker $faker) {
    $events = Event::all();

    $start = $faker->date;
    $end = $faker->dateTimeBetween($start, $start.' +2 days');

    return [
        'name' => $faker->name,
        'date_start' => $faker->date,
        'date_end' => $faker->date,
        'participants' => $faker->numberBetween($min = 500, $max = 2800),
        'happened' => 1,
        //'event_id' => $events->random()->id,
    ];
});
