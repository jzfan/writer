<?php

use Faker\Generator as Faker;

$factory->define(App\Character::class, function (Faker $faker) {
    return [
        'age' => rand(15, 25),
        'mbti' => function() {
        	return ['E', 'I'][rand(0, 1)] . ['S', 'N'][rand(0, 1)] . ['T', 'F'][rand(0, 1)]. ['J', 'P'][rand(0, 1)];
        }
    ];
});
