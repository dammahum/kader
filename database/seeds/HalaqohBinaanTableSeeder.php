<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HalaqohBinaanTableSeeder extends Seeder
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
    			'id_jenjang_tarbiyah' => rand(1, 6),
    			'jumlah' => rand(1,5)
    		];

    	}

    	DB::table('halaqoh_binaan')->truncate();
    	DB::table('halaqoh_binaan')->insert($data);
    }
}
