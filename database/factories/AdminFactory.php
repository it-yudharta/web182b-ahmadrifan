<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'nim' => $faker->name,
        'nama' => $faker->name,
        'jabatan' => $faker->name,
        
    ];
});
