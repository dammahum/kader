<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarKeahlianTableSeeder extends Seeder
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
    			'nama' => "Da'wah"
    		],
    		[
    			'nama' => "Menulis"
    		],
    		[
    			'nama' => "Manajemen"
    		],
    		[
    			'nama' => "Mengajar"
    		],
    		[
    			'nama' => "Pertukangan"
    		],
    		[
    			'nama' => "Komputer"
    		],
    	];

    	DB::table('daftar_keahlian')->truncate();
    	DB::table('daftar_keahlian')->insert($data);
    }
}
