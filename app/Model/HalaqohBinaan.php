<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HalaqohBinaan extends Model
{
    protected $table = 'halaqoh_binaan';

    protected $fillable = [
      'id_kader', 'id_jenjang_tarbiyah', 'jumlah'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
