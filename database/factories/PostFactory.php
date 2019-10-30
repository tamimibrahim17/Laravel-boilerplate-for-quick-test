<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'		=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content'	=> $faker->sentence($nbWords = 100, $variableNbWords = true),
        'user_id'	=> User::all()->random()->id,
        'status'	=> collect(['draft','publish'])->random()
    ];
});
