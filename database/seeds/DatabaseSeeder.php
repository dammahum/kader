<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusPekerjaanTableSeeder::class);
        $this->call(StatusPernikahanTableSeeder::class);
        $this->call(AmalJamaiTableSeeder::class);
        $this->call(DaftarKeahlianTableSeeder::class);
        $this->call(JenisUsahaTableSeeder::class);
        $this->call(JenjangTarbiyahTableSeeder::class);
        $this->call(DaftarKitabTableSeeder::class);
        $this->call(DataUsahaTableSeeder::class);
        $this->call(DataKeluargaTableSeeder::class);
        $this->call(DataPendidikanTableSeeder::class);
        $this->call(DataTarbiyahTableSeeder::class);
        $this->call(HalaqohBinaanTableSeeder::class);
        $this->call(JumlahPengajianTableSeeder::class);
        $this->call(KeahlianKaderTableSeeder::class);
        $this->call(KontakKaderTableSeeder::class);
        $this->call(PengalamanOrganisasiTableSeeder::class);
        $this->call(AktivitasOrganisasiTableSeeder::class);
        $this->call(KaderTableSeeder::class);
    }
}
