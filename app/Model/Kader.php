<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kader extends Model
{
    protected $table = 'kader';

    protected $fillable = [
    	'nama_lengkap', 'nama_panggilan', 'nama_kuniyah', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
    	'golongan_darah', 'alamat', 'suku', 'asal_daerah', 'id_kontak', 'hobi', 'jumlah_saudara', 'anak_ke',
    	'id_status_pernikahan'
    ];
}
