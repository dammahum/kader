<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class KontakKaderTableSeeder extends Seeder
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
    			'telepon1' => $faker->e164PhoneNumber(),
    			'telepon2' => $faker->e164PhoneNumber(),
    			'telepon_rumah' => $faker->phoneNumber(),
    			'email' => $faker->freeEmail(),
    			'website' => $faker->domainName(),
    			'facebook' => $faker->name(),
    			'twitter' => $faker->domainWord()
    		];

    	}

    	DB::table('kontak')->truncate();
    	DB::table('kontak')->insert($data);
    }
}
