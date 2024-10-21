<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Seed predefined categories
          $categories = [
            'Chairs',
            'Tables',
            'Beds',
            'Sofas',
            'Cabinets',
            'Desks',
            'Dressers',
            'Wardrobes'
        ];

        foreach ($categories as $category) {
            Category::create([
                'category_name' => $category
            ]);
        }
    }
}
