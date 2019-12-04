<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Organisation;
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

$factory->define(Organisation::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->realText($maxNbChars = 180),
        'member_size' => $faker->numberBetween($min = 300, $max = 1000),
        'year_founded' => $faker->numberBetween($min = 1800, $max = 2019),
        'website_url' => $faker->url,
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});