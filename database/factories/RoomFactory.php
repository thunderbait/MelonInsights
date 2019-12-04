<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Room;
use App\Venue;
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

$factory->define(Room::class, function (Faker $faker) {
    $venues = Venue::all();
    return [
        'name' => $faker->name,
        'max_height' => $faker->numberBetween($min = 5, $max = 10),
        'total_area' => $faker->numberBetween($min = 150, $max = 400),
        'dimensions' => $faker->numerify('## x ##') ,
        'venue_id' => $venues->random()->id,
    ];
});