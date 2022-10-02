<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Access_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('access_types')->insert([
            'code' => 1,
            'name' => 'Cliente Final',
            'display_order' => 2
        ]);
        DB::table('access')->insert([
            'code' => 2,
            'name' => 'Agencia',
            'display_order' => 3
        ]);
        DB::table('access')->insert([
            'code' => 3,
            'name' => 'Corporativo',
            'display_order' => 1
        ]);
    }
}
