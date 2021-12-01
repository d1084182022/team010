<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class MotorcyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }



    public function run()
    {
        //
        for ($i=0; $i<50; $i++)
        {
            $name = $this->generateRandomName();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

        DB::table('motorcycles')->insert([
            'bid'=>rand(1,8),
            'name'=>$name,
            'year'=>rand(2015,2021),
            'CC'=>rand(600,1000),
            'eid'=>rand(1,6),
            'horsepower'=>rand(80,200),
            'torque'=>rand(10,20),
            'tank_capacity'=>rand(10,20),
            'sitting_height'=>rand(780,850),
            'price'=>rand(60,100),
            'created_at' => $random_datetime,
            'updated_at' => $random_datetime
        ]);
    }}
}
