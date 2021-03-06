<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Form;
use App\Submission;
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
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Form::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'forward_to' => $faker->unique()->safeEmail,
        'user_id' => factory(User::class)
    ];
});

$factory->define(Submission::class, function (Faker $faker) {
    return [
        'form_id' => factory(Form::class),
        'data' => json_encode(['title' => 'this is it', 'body' => 'this is body'])
    ];
});
