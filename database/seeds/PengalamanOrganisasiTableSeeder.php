<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class PengalamanOrganisasiTableSeeder extends Seeder
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
    			'nama' => $faker->company(),
    			'jabatan' => $faker->jobTitle()
    		];

    	}

    	DB::table('pengalaman_organisasi')->truncate();
    	DB::table('pengalaman_organisasi')->insert($data);
    }
}
