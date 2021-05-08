<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->paragraph(3, true),
        'image' => $faker->file($sourceDir = 'resources/images', $targetDir = 'storage/app/public/images'),
        'slug' => $faker->slug(),
        'user_id' => $faker->numberBetween(1, 40),
    ];
});
