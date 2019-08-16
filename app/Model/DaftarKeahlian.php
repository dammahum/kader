<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DaftarKeahlian extends Model
{
    protected $table = 'daftar_keahlian';

	protected $fillable = [
		'nama'
	];
}
