<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AmalJamaiKader extends Model
{
    protected $table = 'amal_jamai_kader';

    protected $fillable = [
      'id_kader', 'id_amal_jamai'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
