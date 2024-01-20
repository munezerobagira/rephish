<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       UserFactory::create([
            'name' => 'admin',
            'email' => 'admin@rephish.com',
            'password'=>Hash::make("password")]);
        //
    }
}
