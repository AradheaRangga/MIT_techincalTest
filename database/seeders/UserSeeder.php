<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users =[
            [
            'name' => 'aradhea',
            'email'=> 'aradhea@gmail.com',
            'password'=> Hash::make('1234') ,
            ],
        ];
        foreach($users as $userItem){
            User::create($userItem);
        }
    }
}
