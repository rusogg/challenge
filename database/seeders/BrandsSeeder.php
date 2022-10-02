<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Avis',
            'display_order' => 5,
            'active' => 1
            
        ]);
        DB::table('brands')->insert([
            'name' => 'Budget',
            'display_order' => 2,
            'active' => 0
            
        ]);
        DB::table('brands')->insert([
            'name' => 'Payless',
            'display_order' => 1,
            'active' => 1
            
        ]);
    }
}
