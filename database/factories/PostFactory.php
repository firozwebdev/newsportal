<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_title' => $faker->name,
        'category_name' => App\Models\Admin\Category::all()->random()->category_name,
        'post_image' => $faker->randomElement(['1.jpg','2.jpg','3.jpg']),
        'post_description' => $faker->text,
        'post_status' => $faker->randomElement(['Active','Pending','Inactive']),
    ];
});
