<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
	public function store(Request $request)
	{
		$people = new People($request->all());
		$people->save();

		return response()->json([
			'person' => $people,
			'saved' => true
		]);
	}

	public function edit(People $People)
	{
		return view('edit_people', ['person' => $People]);
	}

	public function update(Request $request, People $People)
	{
		$People->update($request->all());
		return back();
	}

	public function delete(People $People)
	{
		$People->delete();
		return response()->json([
			'deleted' => true
		]);
	}
}
