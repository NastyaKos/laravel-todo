<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProjectList;
use Faker\Generator as Faker;

$factory->define(ProjectList::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'done' => 0
    ];
});
