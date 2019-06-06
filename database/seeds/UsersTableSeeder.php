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
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'remember_token' => null,
            ]
        );

           // echo PHP_EOL , 'seeding sizes...';
           //   $sizes = Size::create(
           //  [
           //      'name' => '1/8 Acre',
           //      'remember_token' => null,
           //  ]
           //  );

            //   echo PHP_EOL , 'seeding payment modes...';
            //  $pmode = PaymentMode::create(
            // [
            //     'name' => 'M-Pesa',
            //     'remember_token' => null,
            // ]
            // );

            //   echo PHP_EOL , 'seeding Payment types...';
            //  $ptype = PaymentTYpe::create(
            // [
            //     'name' => 'Plot',
            //     'type' => 1,
            //     'remember_token' => null,
            // ]
            // );
            //     echo PHP_EOL , 'seeding Locations...';
            //  $ptype = Location::create(
            // [
            //     'name' => 'Joska',
            //     'remember_token' => null,
            // ]
            // );
}
}
