<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PengalamanOrganisasi extends Model
{
    protected $table = 'pengalaman_organisasi';

    protected $fillable = [
      'id_kader', 'nama', 'jabatan'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
