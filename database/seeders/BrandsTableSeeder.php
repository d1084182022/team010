<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function generateRandomBrands() {
        $brands = ['Aprilia',
                   'BMW',
                   'Ducati',
                   'Honda',
                   'KTM',
                   'Kawasaki',
                   'Suzuki',
                   'Yamaha'
];
        return $brands[rand(0, count($brands)-1)];
    }
    public function generateRandomCountries(): string
    {
        $countries = [
            '日本',
            '義大利',
            '德國',
            '奧地利'
        ];
        return $countries[rand(0, count($countries)-1)];
    }
    public function run()
    {

        $brand = ['Aprilia',
            'BMW',
            'Ducati',
            'Honda',
            'KTM',
            'Kawasaki',
            'Suzuki',
            'Yamaha'];

        for ($i=0; $i<8; $i++) {
            $countries = $this->generateRandomCountries();


            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('brands')->insert([
                'name'=>$brand[$i],
                'country' => $countries,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
