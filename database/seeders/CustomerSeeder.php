<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Assuming every customer is also a user
         $users = User::all();

         foreach ($users as $user) {
             Customer::create([
                 'user_id' => $user->id,
                 'first_name' => $user->name,
                 'last_name' => $this->getRandomLastName(), // Custom last name for demo
                 'email' => $user->email,
                 'phone_number' => $user->phone_number,
                 'address' => $user->address,
                 'city' => $user->city,
                 'postal_code' => $user->postal_code,
                 'country' => $user->country
             ]);
         }
    }

    private function getRandomLastName()
    {
        $lastNames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown'];
        return $lastNames[array_rand($lastNames)];
    }
}
