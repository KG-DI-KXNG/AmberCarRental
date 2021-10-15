<?php

namespace Database\Seeders;

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
        //   \App\Models\Plan::truncate();
        \App\Models\Category::create(['category_name' => 'Car']);
        \App\Models\Category::create(['category_name' => 'Truck']);
        \App\Models\Category::create(['category_name' => 'Bus']);
        \App\Models\Category::create(['category_name' => 'Motocycle']);
        \App\Models\Category::create(['category_name' => 'SUV']);
        \App\Models\Category::create(['category_name' => 'Van']);
    }
}
