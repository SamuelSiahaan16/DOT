<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'name' => 'Administrator',
                'email' => 'admin@dot.co.id',  
                'email_verified_at' => now(),
                'password' => Hash::make('password'),

            ], 
        );
        foreach($data AS $d){
            User::create([
                'name' => $d['name'],
                'email' => $d['email'],   
                'email_verified_at' => $d['email_verified_at'],
                'password' => $d['password'],
            ]);
        }
    }
}