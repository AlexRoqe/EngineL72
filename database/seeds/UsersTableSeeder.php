<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([ 
            'id' => '1',
            'username' => 'norma',
            'email' => 'normacruzchambi@gmail.com',
            'password' => bcrypt('bombita'),
        ]);

        User::create
        ([ 
            'id' => '2',
            'username' => 'yessica',
            'email' => 'yesperca@gmail.com',
            'password' => bcrypt('bombita'),
        ]);

        User::create
        ([ 
            'id' => '3',
            'username' => 'al3xi7o',
            'email' => 'al3xi7o@outlook.com',
            'password' => bcrypt('bombita'),
        ]);

        User::create
        ([ 
            'id' => '4',
            'username' => 'al3x',
            'email' => 'al3x@mail.com',
            'password' => bcrypt('bombita'),
        ]);    }
}
