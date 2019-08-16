<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class KaderTableSeeder extends Seeder
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

        	$jenis_kelamin = ['L', 'P'];
        	$golongan_darah = ['A', 'B', 'AB', 'O'];

    		$data[$i] = [
    			'nama_lengkap' => $faker->name(),
    			'nama_panggilan' => $faker->firstName(),
    			'nama_kuniyah' => $faker->lastName(),
    			'tempat_lahir' => $faker->city(),
    			'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
    			'jenis_kelamin' => $jenis_kelamin[rand(0,1)],
    			'golongan_darah' => $golongan_darah[rand(0,3)],
    			'alamat' => $faker->address(),
    			'suku' => $faker->citySuffix(),
    			'asal_daerah' => $faker->city(),
    			'id_kontak' => rand(1, 10),
    			'hobi' => $faker->word(),
    			'jumlah_saudara' => rand(1, 10),
    			'anak_ke' => rand(1, 10),
    			'id_status_pernikahan' => rand(1, 4),
    		];

    	}

    	DB::table('kader')->truncate();
    	DB::table('kader')->insert($data);
    }
}
