<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Auth;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_name'=>$faker->name,
        'user_id'=> 1,
        //
    ];
});
