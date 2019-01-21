<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userTest = [
            'name' => 'Ninweb Lab',
            'email' => 'lab@ninweb.net',
            'password' => Hash::make('password'),
        ];

        User::create($userTest);
    }
}
