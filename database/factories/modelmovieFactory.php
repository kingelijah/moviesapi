<?php

use Faker\Generator as Faker;

$factory->define(App\model\movie::class, function (Faker $faker) {
   
    return [
        
        'title' => $faker->word,
        'description' => $faker->paragraph,
        'producer' => $faker->name,
        'genre' => $faker->word,
        'country' => $faker->word,
        'user_id' => function(){

        	return App\User::all()->random();
        },
    ];
});
