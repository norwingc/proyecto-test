
@extends('template.template')

@section('content')
	<h1 class="my-5">Person</h1>
	<div class="text-right mr-auto">
		<a href="{{ route('home') }}" class="btn btn-primary mr-auto">Atras</a>
	</div>

	<form class="form" action="{{ route('people.update', $person->id) }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="">Full Name</label>
			<input type="text" name="full_name" class="form-control" value="{{ $person->full_name }}">
		</div>
		<div class="form-group">
			<label for="">Address</label>
			<textarea name="address" class="form-control">{{ $person->address }}</textarea>
		</div>
		<div class="form-group">
			<label for="">Age</label>
			<input type="number" name="age" class="form-control" value="{{ $person->age }}">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-info text-white">Guardar</button>
		</div>
	</form>

	<h1>List sons</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($person->sons as $son)
				<tr>
					<td>{{ $son->full_name }}</td>
					<td>{{ $son->age }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
