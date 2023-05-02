<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id	name	email	email_verified_at	password	remember_token	created_at	updated_at	rol	

        DB::table('users')->insert([
            'name' => 'Nacho1',
            'email' => 'correo1@correo.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('123'),
            'rol' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
