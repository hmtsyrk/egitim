<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kategori;
use Faker\Generator as Faker;

$factory->define(Kategori::class, function (Faker $faker) {
    $baslik = $faker->sentence;
    return [
        "baslik" => $baslik
    ];
});
