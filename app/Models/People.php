<?php

namespace App\Models;

use App\Models\Son;
use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	protected $fillable = ['full_name', 'age', 'address'];

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function sons()
	{
		return $this->hasMany(Son::class);
	}
}
