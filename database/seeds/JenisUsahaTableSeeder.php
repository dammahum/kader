<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisUsahaTableSeeder extends Seeder
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
      		'nama' => 'Jasa'
      	],
      	[
      		'nama' => 'Usaha Dagang'
      	],
      	[
      		'nama' => 'Agen (franchise)'
      	],
      	[
      		'nama' => 'Pengolahan Hasil Tani'
      	],
      	[
      		'nama' => 'Pengolahan Hasil Perikanan'
      	],
      	[
      		'nama' => 'Peternakan'
      	],
      ];

      DB::table('jenis_usaha')->truncate();
      DB::table('jenis_usaha')->insert($data);
    }
}
