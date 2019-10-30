<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attachment;
use Faker\Generator as Faker;

$factory->define(Attachment::class, function (Faker $faker) {
	$update_img = $faker->image(public_path('/img'), 650, 480);
    return [
        'name'	=> $faker->word,
        'path'	=> 'img/'.basename($update_img)
    ];
});
