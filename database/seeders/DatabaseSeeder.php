<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
            CategorySeeder::class,  // Seed categories first
            SupplierSeeder::class,  // Assuming you have a SupplierSeeder
            ProductSeeder::class,   // Seed products after categories and suppliers
        ]);
    }
}
