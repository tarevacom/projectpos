<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'name'=> 'admin',
            'email'=>'admin@mail.com',
            'password'=> bcrypt('123'),
            ]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
