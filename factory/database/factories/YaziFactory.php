<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Yazi;
use Faker\Generator as Faker;
use App\Kategori;
use App\User;

$factory->define(Yazi::class, function (Faker $faker) {
    $baslik = $faker ->sentence;

    return [
        "baslik"=>$baslik,
        "icerik"=>$faker->text,
        "kategori_id"=>function(){
        return Kategori::all()->random();
        },
        "user_id"=>function(){
        return User::all()->random();
    }
    ];
});
