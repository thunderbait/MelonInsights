<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CapRoomStyle;
use App\Style;
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

$factory->define(CapRoomStyle::class, function (Faker $faker) {
    $styles= Style::all();
    return [
        //'room_id' => $faker->name,
        // 'style_id' => $styles->random()->id,
        'capacity' => $faker->numberBetween($min = 300, $max = 10000),
        //'event_id' => $events->random()->id,
    ];
});
