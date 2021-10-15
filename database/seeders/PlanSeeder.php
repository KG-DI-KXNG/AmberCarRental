<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //  Seeders for the Plans Table
        // \App\Models\Plan::truncate();
        \App\Models\Plan::create(['name' => 'Bronze', 'price'=>'5', 'limit'=>5]);
        \App\Models\Plan::create(['name' => 'Silver', 'price'=>'10', 'limit'=>10]);
        \App\Models\Plan::create(['name' => 'Gold', 'price'=>'15', 'limit'=>15]);
        \App\Models\Plan::create(['name' => 'Platinum', 'price'=>'20', 'limit'=>100]);
    }
}
