<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}
}

class UserTableSeeder extends Seeder
{
	public function run()
	{
		$user = new \App\User();
		$user->name = 'Fabio Vedovelli';
		$user->email = 'vedovelli@gmail.com';
		$user->password = bcrypt('123456');
		$user->save();

		$i = 0;
		while($i < 10)
		{
			$user = new \App\User();
			$user->name = 'Fabio Vedovelli';
			$user->email = $i.'vedovelli@gmail.com';
			$user->password = bcrypt('123456');
			$user->save();
			$i++;
		}
	}
}