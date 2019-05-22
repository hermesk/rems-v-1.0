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
         echo PHP_EOL , 'seeding users...';

        $user= User::create(
            [
                'name' => 'admin1',
                'email' => 'admin@rems.com',
                'password' => bcrypt('123321'),
                'remember_token' => null,
            ]
        );
    }
}
