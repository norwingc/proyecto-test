<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
	/**
	 * Undocumented function
	 * @param Request $request
	 * @return void
	 */
	public function store(Request $request)
	{
		$people = new People($request->all());
		$people->save();

		return response()->json([
			'people' => $people
		]);
	}

	/**
	 * Undocumented function
	 * @param People $People
	 * @return void
	 */
	public function show(People $People)
	{
		$People->load('sons');
		$new_people = $People;
		return view('people.show', ['person' => $People, 'new_people' => $new_people]);
	}

	/**
	 * Undocumented function
	 * @param Request $request
	 * @param People $People
	 * @return void
	 */
	public function update(Request $request, People $People)
	{
		$People->update($request->all());
		return back();
	}

	/**
	 * Undocumented function
	 * @param People $People
	 * @return void
	 */
	public function delete(People $People)
	{
		$People->sons()->delete();
		$People->delete();

		return response()->json([
			'deleted' => true
		]);
	}
}
