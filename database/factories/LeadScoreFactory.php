<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LeadScore;
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

$factory->define(LeadScore::class, function (Faker $faker) {
    return [
        'venue_specs' => $faker->numberBetween($min = 0, $max = 100),
        'value' => $faker->numberBetween($min = 0, $max = 100),
        'sector' => $faker->randomElement($array = array (33,66,100)),
        'proj_max_capacity' => $faker->numberBetween($min = 1000, $max = 20000),
        'proj_exhibition' =>  $faker->numberBetween($min = 7000, $max = 50000),
        'proj_break_outs' => $faker->numberBetween($min = 1, $max = 15),
        'preferred_month' => $faker->monthName($max = 'now'),
        'year_interval' => $faker->numberBetween($min = 1, $max = 4),
        'proj_participants' => $faker->numberBetween($min = 500, $max = 2800),
        'proj_days' =>  $faker->numberBetween($min = 1, $max = 3),
        'proj_rooms' => $faker->numberBetween($min = 4, $max = 10),
        //'lead_id' => $leads->random()->id,
    ];
});
