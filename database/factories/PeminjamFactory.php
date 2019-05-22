<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Peminjam;
use Faker\Generator as Faker;

$factory->define(Peminjam::class, function (Faker $faker) {
    return [
        'nim' => $faker->name,
        'nama' => $faker->name,
        'jurusan' => $faker->name,
        'buku' => $faker->name,
    ];
});
