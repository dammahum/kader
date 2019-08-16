<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataPendidikan extends Model
{
    protected $table = 'data_pendidikan';

    protected $fillable = [
      'id_kader', 'sd', 'sltp', 'slta', 'pt_d3', 'pt_s1', 'pt_s2', 'pt_s3', 'jurusan_slta', 'pendidikan_s1', 'pendidikan_s2', 'pendidikan_s3', 'kursus'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
