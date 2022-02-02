<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Serie;
use Faker\Generator as Faker;

$factory->define(Serie::class, function (Faker $faker) {
    return [
        
        'title'=>$faker-> word(2, true),
        'author'=>$faker-> name(),
        'release_date'=>$faker-> date(),
        'rating'=>$faker->optional()-> numberBetween(1, 5),
    ];
});