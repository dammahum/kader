<?php

use Illuminate\Database\Seeder;

class StatusPernikahanTableSeeder extends Seeder
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
       		'status' => 'Belum Menikah'
       	],
       	[
       		'status' => 'Menikah'
       	],
       	[
       		'status' => 'Cerai Mati'
       	],
       	[
       		'status' => 'Cerai Hidup'
       	]
       ];

       DB::table('status_pernikahan')->truncate();
       DB::table('status_pernikahan')->insert($data);
    }
}
