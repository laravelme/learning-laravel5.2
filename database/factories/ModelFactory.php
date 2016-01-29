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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(\App\Application::class,function(Faker\Generator $faker){
   return [
       'user_id'=>rand(1,40),
       'resume_id'=>"1",
       'job_id'=>"1",
       'name'=> $faker->name,
       'email'=>$faker->email,
       'cover_letter'=>$faker->paragraphs(3,true),
       'cv'=> $faker->paragraph,
   ];
});