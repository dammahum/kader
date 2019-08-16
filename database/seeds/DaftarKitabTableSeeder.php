<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarKitabTableSeeder extends Seeder
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
    			'id_kader' => rand(1, 10),
    			'nama' => "Kitabul Jami'"
    		],
    		[
    			'id_kader' => rand(1, 10),
    			'nama' => "Dirosa"
    		],
    		[
    			'id_kader' => rand(1, 10),
    			'nama' => "Minhajul Qhasidin"
    		],
    		[
    			'id_kader' => rand(1, 10),
    			'nama' => "Riyadhussholihin"
    		],
    		[
    			'id_kader' => rand(1, 10),
    			'nama' => "Tafsir Al-Jalalain"
    		],
    		[
    			'id_kader' => rand(1, 10),
    			'nama' => "Arba'in"
    		],
    	];

    	DB::table('daftar_kitab')->truncate();
    	DB::table('daftar_kitab')->insert($data);
    }
}
