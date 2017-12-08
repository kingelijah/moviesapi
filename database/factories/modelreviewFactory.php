<?php

use Faker\Generator as Faker;
use App\model\movie;

$factory->define(App\model\review::class, function (Faker $faker) {
    
    return [
        
        'movie_id' => function(){
        	return movie::all()->random();

        },

        'viewer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5),
    ];
});
