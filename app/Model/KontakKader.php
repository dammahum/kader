<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KontakKader extends Model
{
    protected $table = 'daftar_kitab';

    protected $fillable = [
      'id_kader', 'telepon1', 'telepon2', 'telepon_rumah', 'email', 'website', 'facebook', 'twitter'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
