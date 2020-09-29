<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'avatar' => 'https://www.w3schools.com/howto/img_avatar.png',
        'title' => 'Psychologist',
        'bio' => $faker->sentence(10, true),
        'reviews' => $faker->numberBetween(1, 100),
        'rate' => $faker->randomFloat(1, 1, 5),
        'sessions' => $faker->numberBetween(1, 1000),
        'fees' => $faker->randomFloat(null, 50, 500),
        'remember_token' => Str::random(10),
    ];
});
