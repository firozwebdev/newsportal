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

/* Factory command with tinker 

factory(App\User::class, 200)->create();

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

// $factory->define(App\Models\Admin\Category::class, function (Faker $faker) {
//     return [
//         'category_name' => $faker->randomElement(['Sports','Politics','Game','History','Geography','Astronomy']),
//         'category_description' => $faker->text,
        
//     ];
// });

// $factory->define(App\Models\Admin\Post::class, function (Faker $faker) {
//     return [
//         'post_title' => $faker->name,
//         'category_name' => App\Models\Admin\Category::all()->random()->category_name,
//         'post_image' => $faker->randomElement(['1.jpg','2.jpg','3.jpg']),
//         'post_description' => $faker->text,
//         'post_status' => $faker->randomElement(['Active','Pending','Inactive']),
        
//     ];
// });