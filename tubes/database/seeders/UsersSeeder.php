<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void */

    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@asikjuga.test',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'),
                'is_admin' => '1',
                'remember_token' => Str::random(10),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'User',
                'email' => 'user@asikjuga.test',
                'email_verified_at' => now(),
                'password' => Hash::make('user'),
                'is_admin' => null,
                'remember_token' => Str::random(10),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Joko',
                'email' => 'joko@asikjuga.test',
                'email_verified_at' => now(),
                'password' => Hash::make('joko'),
                'is_admin' => null,
                'remember_token' => Str::random(10),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Jono',
                'email' => 'jono@asikjuga.test',
                'email_verified_at' => now(),
                'password' => Hash::make('jono'),
                'is_admin' => null,
                'remember_token' => Str::random(10),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
