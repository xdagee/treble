<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id'	=>	0000000001,
            'name' => 'Ad Mino',
            'number' => 264370300,
        	'email'		=>	'admin@admin.com',
        	'password'	=>	bcrypt('admino'),
            'remember_token' => str_random(10)
        ]);
    }
}
