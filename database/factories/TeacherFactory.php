<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'teacher_name' => $faker->name,
        'user_id' => 1,
        'post_id' => $faker->numberBetween(1, 4),
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'education_degree' => 'BSC',
        'teacher_photo' =>  'abcdef'
        //
    ];
});
