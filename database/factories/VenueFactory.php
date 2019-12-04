<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Venue;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Grimzy\LaravelMysqlSpatial\Types\Point;

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

$factory->define(Venue::class, function (Faker $faker) {
    // Random location additions
    $locationAdd =  frand(0, 7, 3);

    return [
        'name' => $faker->name,
        'country_code' => $faker->countryCode,
        'description' => $faker->realText($maxNbChars = 180),
        'website_url' => $faker->url, // password
        'max_capacity' => $faker->numberBetween($min = 1000, $max = 20000),
        'break_out_rooms' => $faker->numberBetween($min = 1, $max = 15),
        'square_meter' => $faker->numberBetween($min = 7000, $max = 50000),
        'location' => new Point(1 + $locationAdd, 51 - $locationAdd),
    ];
});

// Gets a random number from the passed given varibales
function frand($min, $max, $decimals = 0) {
    $scale = pow(10, $decimals);
    return mt_rand($min * $scale, $max * $scale) / $scale;
}