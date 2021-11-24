<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotorcyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('motorcycles')->insert([
            'bid'=>1,
            'name'=>'R6',
            'year'=>2020,
            'CC'=>600,
            'eid'=>2,
            'horsepower'=>80,
            'torque'=>20,
            'tank_capacity'=>15,
            'sitting_height'=>800,
            'price'=>80
        ]);
    }
}
