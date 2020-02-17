<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Documents;
use Faker\Generator as Faker;

$factory->define(Documents::class, function (Faker $faker) {
    $document = ['sport.xlsx','fishing.csv','Education.xls','Information_Technology.CSV','Agriculture.TXT','Arts.xlsx','Architecture_and_Construction.csv','Education_and_Training.xlsx','Hospitality_and_Tourism.txt'];
    $formart = ['xlsx','csv','txt'];

    return [
        //
        'interest_id' => \App\Interests::all()->random()->id,
        'document_name' => $faker->name,
        'file' => $document[rand(0,6)],
        'format' => $formart[rand(0,1)],
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];
});
