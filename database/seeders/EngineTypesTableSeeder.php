<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class EngineTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomEngineTypes():string
    {
        $enginetypes = [
            '水冷四行程DOHC並列雙缸引擎',
            '水冷4缸DOHC 16V',
            '空油冷2缸DOHC 8V',
            '水冷2缸DOHC 8V',
            '機械增壓+水冷4缸DOHC 16V',
            '水冷3缸DOHC 12V'
        ];
        return $enginetypes[rand(0, count($enginetypes) - 1)];
    }
    public function run()
    {
        //
        for ($i=0; $i<7; $i++) {
            $enginetypes = $this->generateRandomEngineTypes();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('engine_types')->insert([
                'engine_type'=>$enginetypes,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
