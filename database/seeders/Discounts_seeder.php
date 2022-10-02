<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class Discounts_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            'name' => 'prueba1',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 1
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 1
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 1
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba2',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 2
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 2
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 2
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba3',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 3
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba4',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 4
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 4
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 4
            
        ]);
        
        DB::table('discounts')->insert([
            'name' => 'prueba5',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 5
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 5
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 5
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba6',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 6
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 6
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 6
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba7',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 7
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB2',
            'discount_id' => 7
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 7
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba8',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 8
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 8
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 8
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba9',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 9
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 9
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 9
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba10',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 10
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 10
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 10
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba11',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 11
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 11
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 11
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba12',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 12
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 12
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 12
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba13',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 13
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 13
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 13
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba14',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 14
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 14
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 14
            
        ]);

        DB::table('discounts')->insert([
            'name' => 'prueba15',
            'start_date' => Carbon::parse('2022-01-01'),
            'end_date' => Carbon::parse('2022-01-01'),
            'priority' => 1,
            'active' => 1,
            'region_id' => 1,
            'brand_id' => 2,
            'access_type_code' => 3
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 1,
            'to_days' => 3,
            'discount' => 3,
            'code' => 'AAAB24',
            'discount_id' => 15
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 3,
            'to_days' => 20,
            'discount' => 30,
            'code' => 'AAAB25',
            'discount_id' => 15
            
        ]);
        DB::table('discount_ranges')->insert([
            'from_days' => 30,
            'to_days' => 50,
            'discount' => 50,
            'code' => 'AAAB26',
            'discount_id' => 15
            
        ]);
    }
}
