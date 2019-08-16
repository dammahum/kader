<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JumlahPengajian extends Model
{
    protected $table = 'jumlah_pengajian';

    protected $fillable = [
      'id_kader', 'dirosa', 'majelis_taklim'
    ];

    public function kader() {

      return $this->belongsTo(Kader::class, 'id_kader');

    }
}
