<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		DB::table('users')->insert(array(
			['fname'=>'Isagani',
			'lname'=>'Marquez',
			'username'=>'Gani',
			'email'=>'gani@gmail.com',
			'password'=> bcrypt('masterGani')],
			['fname'=>'CJ',
			'lname'=>'Cruz',
			'username'=>'CJ',
			'email'=>'cj@gmail.com',
			'password'=> bcrypt('masterCJ')],
		));
	}
}
