<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\EventType;
use App\Organisation;
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

$factory->define(Event::class, function (Faker $faker) {
    $eventTypes = EventType::all();
    $organisations = Organisation::all();
    return [
        'name' => $faker->name,
        'description' => $faker->realText($maxNbChars = 180),
        'event_type_id' => $eventTypes->random()->id,
        'organisation_id' => $organisations->random()->id,
    ];
});