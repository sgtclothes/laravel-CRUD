<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

$factory->define(App\siswa::class, function (Faker $faker) {
	return [
		'nama_depan' => $faker->name,
		'nama_belakang' => $faker->name,
		'jenis_kelamin' => $faker->name,
		'agama' => $faker->name,
		'alamat' => $faker->word,
	];
});
