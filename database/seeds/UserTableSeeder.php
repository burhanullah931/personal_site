<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\UserTableSeeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser =  User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@ps.com',
            'password' => Hash::make('12345678'),
            
        ]);
        $newUser->assignRole('superadmin');
    }
}
