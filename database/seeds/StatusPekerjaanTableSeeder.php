<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPekerjaanTableSeeder extends Seeder
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
       		'nama' => 'Petani'
       	],
       	[
       		'nama' => 'Karyawan'
       	],
       	[
       		'nama' => 'Ibu Rumah Tangga'
       	],
       	[
       		'nama' => 'Pegawai Negeri Sipil'
       	],
       	[
       		'nama' => 'Nelayan'
       	],
       ];

       DB::table('status_pekerjaan')->truncate();
       DB::table('status_pekerjaan')->insert($data);
    }
}
