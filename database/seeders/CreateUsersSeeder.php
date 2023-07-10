<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'sobiaabdullah233@gmail.com',
               'role'=>'user',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Super Admin User',
               'email'=>'Amer@Nodesol.com',
               'role'=> 'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'waheed@nodesol.com',
               'role'=> 'user',
               'password'=> bcrypt('123456'),
            ],
        ];

        // foreach ($users as $key => $user) {
            User::insert($users);
        // }
    }
}
