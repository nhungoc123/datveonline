<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(['name' => 'Nhu Ngoc', 'email' => 'nhungoc@stu.vn', 'password' => bcrypt(123456)]);
    }

}