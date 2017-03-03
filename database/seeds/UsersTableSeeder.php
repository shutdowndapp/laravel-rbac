<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'mark';
        $user->email = 'massjt@qq.com';
        $user->password = bcrypt('mark');
        $user->save();
    }
}
