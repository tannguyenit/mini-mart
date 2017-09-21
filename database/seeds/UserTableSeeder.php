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
        DB::table('users')->insert([
            'username' => 'tannguyen',
            'fullname' => 'Tan Nguyen',
            'email'    => 'tannguyenit95@gmail.com',
            'password' => bcrypt('123qweasd'),
            'is_admin' => 1,
        ]);
    }
}
