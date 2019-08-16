<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class DataTarbiyahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for($i=0; $i < 10; $i++){

    		$data[$i] = [
    			'id_kader' => rand(1, 10),
    			'nama_halaqoh' => $faker->company(),
    			'id_jenjang_tarbiyah' => rand(1, 6),
    			'nama_murabbi' => $faker->name(),
    			'tempat_tarbiyah' => $faker->streetName(),
    		];

    	}

    	DB::table('data_tarbiyah')->truncate();
    	DB::table('data_tarbiyah')->insert($data);
    }
}
