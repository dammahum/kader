<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisUsaha extends Model
{
    protected $table = 'jenis_usaha';

    protected $fillable = [
    	'nama'
    ];
}
