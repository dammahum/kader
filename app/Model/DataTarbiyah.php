<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataTarbiyah extends Model
{
    protected $table = 'data_tarbiyah';

    protected $fillable = [
      'id_kader', 'nama_halaqoh', 'id_jenjang_tarbiyah', 'nama_murabbi', 'tempat_murabbi'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
