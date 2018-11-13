<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Information::class, function (Faker $faker) {
	$time = $faker->dateTimeThisMonth();
    return [
        'residence_address'=>sprintf('xx小区第%d号楼%d门',$faker->randomNumber(2), $faker->randomNumber(2)),
        'residence_status'=>rand(1,2),
        'house_people'=>rand(1,3),
        'house_status'=>rand(1,4),
        'people'=>rand(1,5),
        'situation'=>$faker->sentence,
        'other'=>$faker->sentence,
        'created_at'  => $time,
        'updated_at'  => $time,
    ];
});
