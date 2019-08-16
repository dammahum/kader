<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DaftarKitab extends Model
{
    protected $table = 'daftar_kitab';

    protected $fillable = [
      'id_kader', 'nama'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}