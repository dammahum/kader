<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RiwayatTarbiyah extends Model
{
    protected $table = 'daftar_kitab';

    protected $fillable = [
      'id_kader', 'id_jenjang_tarbiyah', 'tahun', 'murabbi'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
