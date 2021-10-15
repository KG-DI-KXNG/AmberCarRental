<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           \App\Models\brand::truncate();
        \App\Models\Brand::create(['brand_name' => 'Bronze']);
        \App\Models\Brand::create(['brand_name' => 'Silver']);
        \App\Models\Brand::create(['brand_name' => 'Gold']);
        \App\Models\Brand::create(['brand_name' => 'Platinum']);
    }
}
