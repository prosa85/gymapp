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

$factory->define(gymapp\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
		'profile_pic' => $faker->randomNumber,
        
    ];
});

$factory->define(gymapp\Exercise::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'image_id' => $faker->randomDigit,
        'type' => "cardio",
    ];
});
$factory->define(gymapp\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'body' => $faker->text,
        'image_id' => $faker->randomDigit,
       
    ];
});