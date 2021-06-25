<?php

namespace App\Models;

use App\Models\People;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];

	public function person()
	{
		return $this->hasOne(People::class);
	}
}
