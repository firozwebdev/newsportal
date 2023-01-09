<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->randomElement(['Sports','Politics','Game','History','Geography','Astronomy']),
        'category_description' => $faker->text,
    ];
});
