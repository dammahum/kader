<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataUsahaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for($i=0; $i < 10; $i++){

    		$data[$i] = [
    			'id_kader' => rand(1, 10),
    			'id_jenis_usaha' => rand(1, 6),
    			'lama_usaha' => rand(1, 4),
    			'status' => rand(1, 3),
    			'modal' => rand(1, 3),
    		];

    	}

    	DB::table('data_usaha')->truncate();
    	DB::table('data_usaha')->insert($data);
    }
}
