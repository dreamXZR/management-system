<?php

use Faker\Generator as Faker;

$factory->define(App\Models\DrathProof::class, function (Faker $faker) {

	   $sentence = $faker->sentence();

	  // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
         'name' => $faker->name,
         'id_number'=>'111111111111111111',
         'residence_address'=>$faker->address,
         'present_address'=>$faker->address,
      	 'applicant'=>$faker->name,
      	 'death_date'=>$faker->date,
      	 'death_address'=>$faker->address,
      	 'death_relation'=>rand(1,3),
      	 'applicant_id_number'=>'111111111111111111',
      	 'agent'=>$faker->name,
      	 'application_relation'=>$faker->name,
      	 'agent_id_number'=>'111111111111111111',
      	 'other'=>$sentence,
      	 'number'=>'20181030'.rand(1,100),
      	 'created_at' => $created_at,
         'updated_at' => $updated_at,

    ];
});
