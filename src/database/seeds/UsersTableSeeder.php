<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
		{
			$faker = Faker\Factory::create('en');

			for ( $i = 0; $i < 10; $i++ ) {
				DB::table('users')->insert([
					'name' => $faker->unique()->userName(),
					'email' => $faker->unique()->email(),
					'password' => hash('sha256', 1011),
					'email_verified_at' => $faker->dateTime(),
					'created_at' => $faker->dateTime(),
					'updated_at' => $faker->dateTime(),
				]);
			}
    }
}
