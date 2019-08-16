<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AktivitasOrganisasi extends Model
{
    protected $table = 'aktivitas_organisasi';

    protected $fillable = [
      'id_kader', 'daurah_kaderisasi', 'daurah_qadha', 'daurah_sakinah', 'daurah_syariyyah', 'diklat_murabbi', 'diklat_dai_khatib'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
