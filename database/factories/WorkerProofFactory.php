<?php

use Faker\Generator as Faker;

$factory->define(App\Models\WorkerProof::class, function (Faker $faker) {
	// 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    
    return [
        'name' => $faker->name,
        'id_number'=>'120111111111111',
        'present_address'=>$faker->address,
        'phone'=>$faker->phoneNumber,
        'worker_content'=>$faker->sentence(),
        'worker_place'=>$faker->address,
        'number'=>'20181030'.rand(1,100),
      	'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
