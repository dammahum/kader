<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JumlahPengajianTableSeeder extends Seeder
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
    			'dirosa' => rand(1, 5),
    			'majelis_taklim' => rand(1,5)
    		];

    	}

    	DB::table('jumlah_pengajian')->truncate();
    	DB::table('jumlah_pengajian')->insert($data);
    }
}
