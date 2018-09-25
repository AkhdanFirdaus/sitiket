<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Event::class, function (Faker\Generator $faker) {
    $nama = $faker->name;
    return [
        'name' => $nama,
        'slug' => str_slug($nama, '-'),
        'user_id' => 1,
        'location' => $faker->address,
        'description' => 'lorem ipsum dolor sit amet',
        'event_start' => \Carbon\Carbon::now()->addDays(2),     
    ];
});
