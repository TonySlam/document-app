<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Interests;
use Faker\Generator as Faker;

$factory->define(Interests::class, function (Faker $faker) {

        //


    $interest = ['Marketing, Sales and Service','Government and Public Administration','Finance','Arts, Audio/Video Technology and Communications','Public Administration','Science','Sport', 'Fishing', 'Education','Information Technology','Agriculture','Arts','Architecture and Construction','Education and Training','Hospitality and Tourism'];
    return [
        'category' => $interest[rand(0, 9)], // secret
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),

    ];
});
