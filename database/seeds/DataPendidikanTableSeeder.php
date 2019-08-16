<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class DataPendidikanTableSeeder extends Seeder
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
    			'sd' => $faker->company(),
    			'sltp' => $faker->company(),
    			'slta' => $faker->company(),
    			'pt_d3' => $faker->company(),
    			'pt_s1' => $faker->company(),
    			'pt_s2' => $faker->company(),
    			'pt_s3' => $faker->company(),
    			'jurusan_slta' => $faker->companySuffix(),
    			'pendidikan_s1' => $faker->companySuffix(),
    			'pendidikan_s2' => $faker->companySuffix(),
    			'pendidikan_s3' => $faker->companySuffix(),
    			'kursus' => $faker->jobTitle()
    		];

    	}

    	DB::table('data_pendidikan')->truncate();
    	DB::table('data_pendidikan')->insert($data);
    }
}
