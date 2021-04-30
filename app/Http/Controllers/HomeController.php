<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
	{
		$people = People::all();
		return view('home', compact('people'));
	}
}
