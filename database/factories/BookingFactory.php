<?php

use Faker\Generator as Faker;

$factory->define(App\Booking::class, function (Faker $faker) {
    return [
        'name'      =>  $faker->text(50),
        'bookdate'  =>  $faker->date(),
        'message'   =>  $faker->text(200)
    ];
});
