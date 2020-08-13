<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'dept_code' => $faker->unique()->isbn10,
        'name' => $faker->unique()->name
    ];
});
