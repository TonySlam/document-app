<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PersonalDetails;
use App\User;
use Faker\Generator as Faker;

$factory->define(PersonalDetails::class, function (Faker $faker) {
    $gender = ['Male','Female'];

    return [
        //
        'user_id' => User::all()->random()->id,
        'title'  => $faker->title,
        'gender' => $gender[rand(0,1)],
        'phone'  => $faker->phoneNumber,
        'country' => $faker->country,
        'city' => $faker->city,
        'suburb' => $faker->citySuffix,
        'address'=> $faker->address,
        'postal_code' => $faker->postcode,
    ];
});
