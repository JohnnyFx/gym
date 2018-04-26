<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Entities\Users::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'password' => str_random(10),
        'remember_token' => str_random(20),
        'active' => 1,
        'company_id'=>1,
        'role'=>1

    ];
});

$factory->define(App\Entities\Clients::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'phone' =>$faker->phoneNumber,
        'obs'=>$faker->sentence,
        'active' => 1,
        'company_id'=>1
    ];
});

$factory->define(App\Entities\MuscleGroups::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'icon' => str_random(11),
        'company_id'=>1

    ];
});
