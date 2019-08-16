<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmalJamaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data=[
    		[
    			'nama' => 'Murabbi/ yah'
    		],
    		[
    			'nama' => "Da'i/ yah"
    		],
    		[
    			'nama' => 'Pengurus DPP WI'
    		],
    		[
    			'nama' => 'Pengurus DPC/DPD/DPW'
    		],
    		[
    			'nama' => 'Guru/Dosen/YPWI'
    		],
    		[
    			'nama' => 'Karyawan Usaha WI'
    		],
    		[
    			'nama' => 'Karyawan/Staf WI'
    		],
    		[
    			'nama' => 'Donatur Tetap'
    		],
    		[
    			'nama' => 'Tentor Dirosa'
    		],
    		[
    			'nama' => 'Tentor Tahsin'
    		],
    	];

    	DB::table('amal_jamai')->truncate();
    	DB::table('amal_jamai')->insert($data);
    }
}
