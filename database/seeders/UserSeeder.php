<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([

            'name'  => 'Super Admin',
            'uname' => 'sadmin',
            'email' => 'sadmin@gmail.com',
            'password'  => Hash::make('1234'),


        ]);

        User::create([

            'name'  => 'Admin',
            'uname' => 'admin',
            'email' => 'admin@gmail.com',
            'password'  => Hash::make('1234'),


        ]);



    }
}
