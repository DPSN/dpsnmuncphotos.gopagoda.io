<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info("\nPlease wait while The Universe prepares itself...\n");
		$this->command->info("The Universe knows all...\n");

		$this->call('AnswerSeeder');

		$this->command->info("\nThe Universe is prepared!\n");
	}

}
