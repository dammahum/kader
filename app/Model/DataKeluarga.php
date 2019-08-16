<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{
    protected $table = 'data_keluarga';

    protected $fillable = [
      'id_kader', 'nama_ayah', 'pekerjaan_ayah', 'nama_ibu', 'pekerjaan_ibu', 'telepon_wali', 'alamat_wali', 'nama_pasangan', 'nama_anak'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
