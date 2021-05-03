<?php

namespace App\Models;

use App\Models\People;
use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
	protected  $fillable = ['name', 'age'];

	public function people()
	{
		return $this->belongsTo(People::class);
	}
}
