@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="mt-4 text-center">Editando a la persona</h1>

		<form action="{{ route('people.update', $person->id) }}" method="POST"  class="form">
			@csrf
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="full_name" value="{{ $person->full_name }}" class="form-control">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="text" name="phone" value="{{ $person->phone }}"  class="form-control">
			</div>

			<div class="text-center">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
@endsection
