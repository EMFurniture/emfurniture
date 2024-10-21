<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@email.com',
        //     'password' => bcrypt('adminpass'), // Replace with the hashed password
        //     'phone_number' => null, 
        //     'address' => null,
        //     'city' => null,
        //     'postal_code' => null,
        //     'country' => null,
        //     'role' => 'admin',
        // ]);

        // User::create([
        //     'name' => 'User',
        //     'email' => 'user@email.com',
        //     'password' => bcrypt('userpass'), // Replace with the hashed password
        //     'phone_number' => null, 
        //     'address' => null,
        //     'city' => null,
        //     'postal_code' => null,
        //     'country' => null,
        //     'role' => 'user',
        //     // Add other fields as needed
        // ]);

        // Create a specific admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // default password
            'phone_number' => '1234567890',
            'address' => '123 Admin St',
            'city' => 'Admin City',
            'postal_code' => '12345',
            'country' => 'Admin Country',
            'role' => 'user',
        ]);

        // Create additional random users
        User::factory(10)->create();
    }
}
