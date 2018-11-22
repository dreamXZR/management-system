<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Resident::class, function (Faker $faker) {
	$time = $faker->dateTimeThisMonth();
    return [
        'name'=>$faker->name,
        'relationship'=>'朋友',
        'present_address'=>sprintf('xx小区第%d号楼%d门',$faker->randomNumber(2), $faker->randomNumber(2)),
        'sex'=>mt_rand(0,1),
        'nation'=>'汉族',
        'birthday'=>$faker->date,
        'culture'=>mt_rand(1,3),
        'face'=>mt_rand(1,3),
        'marriage'=>mt_rand(1,3),
        'identity'=>mt_rand(1,3),
        'hobby'=>'兴趣爱好',
        'id_number'=>'1200000000000000',
        'unit'=>$faker->sentence,
        'phone'=>$faker->phoneNumber,
        'created_at'  => $time,
        'updated_at'  => $time,
    ];
});
