<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StatusPekerjaan extends Model
{
	protected $table = 'status_pekerjaan';

	protected $fillable = [
		'nama'
	];
}
