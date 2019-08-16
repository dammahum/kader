<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeahlianKaderTableSeeder extends Seeder
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
    			'id_daftar_keahlian' => rand(1, 6)
    		];

    	}

    	DB::table('keahlian_kader')->truncate();
    	DB::table('keahlian_kader')->insert($data);
    }
}
