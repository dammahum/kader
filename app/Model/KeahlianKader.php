<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KeahlianKader extends Model
{
    protected $table = 'keahlian_kader';

    protected $fillable = [
      'id_kader', 'id_daftar_keahlian'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
