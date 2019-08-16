<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StatusPernikahan extends Model
{
	protected $table = 'status_pernikahan';

	protected $fillable = [
		'status'
	];
}
