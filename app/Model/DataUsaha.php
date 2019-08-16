<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataUsaha extends Model
{
    protected $table = 'data_usaha';

    protected $fillable = [
      'id_kader', 'id_jenis_usaha', 'lama_usaha', 'status', 'modal'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
