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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),

        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
    ];
});


$factory->define(\App\Profile::class, function (Faker\Generator $faker) {
    $users = \App\User::all()->toArray();
    return [
       'username' => str_replace('.', '_', $faker->unique()->userName),
        'description' => $faker->text(),
    ];
});


$factory->define(Upload::class, function (Faker\Generator $faker) {
    return [
        'path' => $path = $faker->file(storage_path('products'), storage_path('app'), false),
        'name' => $path,
        'mime' => $faker->mimeType,
        'size' => $faker->randomNumber
    ];
});



$factory->define(App\FileEntry::class, function (Faker\Generator $faker) {
    $category = ['abstract', 'animals', 'business', 'cats', 'city', 'food',
        'nightlife', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];

    $fn = $faker->image($dir = storage_path(), $width = 640, $height = 480,
        $category[rand(0, count($category) -1)], true, 'Faker');
    return [
        'filename' => basename($fn),
        'mime' => $faker->mimeType,
    ];
});
