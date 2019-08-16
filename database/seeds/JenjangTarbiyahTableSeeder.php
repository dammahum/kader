<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenjangTarbiyahTableSeeder extends Seeder
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
					'nama' => "Ta'rif Awwal"
				],
				[
					'nama' => "Ta'rif Tsani"
				],
				[
					'nama' => "Takwin Awwal"
				],
				[
					'nama' => "Takwin Tsani"
				],
				[
					'nama' => "Tanfidziyah"
				],
				[
					'nama' => "Itqon"
				],
			];

			DB::table('jenjang_tarbiyah')->truncate();
			DB::table('jenjang_tarbiyah')->insert($data);
		}
}
