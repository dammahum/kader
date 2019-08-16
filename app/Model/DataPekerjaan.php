<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataPekerjaan extends Model
{
    protected $table = 'data_pekerjaan';

    protected $fillable = [
      'id_kader', 'id_status_pekerjaan', 'jabatan', 'nama_instansi', 'telepon', 'alamat'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
