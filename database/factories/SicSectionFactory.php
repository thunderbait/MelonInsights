<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\SicSection;
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

$factory->define(SicSection::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->randomLetter,
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
