<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class DataKeluargaTableSeeder extends Seeder
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
    			'nama_ayah' => $faker->name(),
    			'pekerjaan_ayah' => $faker->jobTitle(),
    			'nama_ibu' => $faker->name(),
    			'pekerjaan_ibu' => $faker->jobTitle(),
    			'telepon_wali' => $faker->e164PhoneNumber(),
    			'alamat_wali' => $faker->streetAddress(),
    			'nama_pasangan' => $faker->name(),
    			'nama_anak' => $faker->name()
    		];

    	}

    	DB::table('data_keluarga')->truncate();
    	DB::table('data_keluarga')->insert($data);
    }
  
}
