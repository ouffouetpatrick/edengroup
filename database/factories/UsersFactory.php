<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
	for ($i=0; $i <4 ; $i++) { 
	    return [
	        'nom' => 'Hozigre'.$i,
	        'prenoms' => 'Stephane'.$i,
	        'phone_number1' => '73769202',
	        'phone_number2' => '49161830',
	        'email' => 'stephane@gmail.com'.$i,
	        'adresse_livraison' => 'Abidjan BP 01 3421'.$i,
	        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
	        'photo' => 'a.png'.$i
	    ];
	}
});