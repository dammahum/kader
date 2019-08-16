<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AktivitasOrganisasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i < 10; $i++){

        	$letter=[
        		'a', 'b', 'c'
        	];

    		$data[$i] = [
    			'id_kader' => rand(1, 10),
    			'daurah_kaderisasi' => rand(1, 3),
    			'daurah_qadha' => rand(1, 3),
    			'daurah_sakinah' => rand(1, 3),
    			'daurah_syariyyah' => rand(1, 3),
    			'diklat_murabbi' => $letter[rand(0, 2)],
    			'diklat_dai_khatib' => $letter[rand(0, 2)]
    		];

    	}

    	DB::table('aktivitas_organisasi')->truncate();
    	DB::table('aktivitas_organisasi')->insert($data);
    }
}
