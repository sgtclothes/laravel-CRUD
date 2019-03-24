<?php

use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		// How many genres you need, defaulting to 10
		$count = (int)$this->command->ask('How many siswa do you need ?', 10);

		$this->command->info("Creating {$count} siswa.");

		// Create the Genre
		$siswa = factory(App\siswa::class, $count)->create();

		$this->command->info('Siswa Created!');
	}
}
