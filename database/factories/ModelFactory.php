<?php

use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    // get random user
    $user = \App\User::inRandomOrder()->first();

    // generate fake data for post in timeline
    return [
        'user_id'   => $user->id,
        'title'     => $faker->sentence,
        'body'      => $faker->text,
    ];
});