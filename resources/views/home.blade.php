@extends('template.template')

@section('content')

	<h1 class="my-5">People</h1>

	<form class="form" action="{{ route('people.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="">Full Name</label>
			<input type="text" name="full_name" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Address</label>
			<textarea name="address" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="">Age</label>
			<input type="number" name="age" class="form-control">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-info text-white">Guardar</button>
		</div>
	</form>

	<h1 class="my-5">List</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Full Name</th>
				<th>Address</th>
				<th>Age</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($people as $item)
				<tr>
					<td>{{ $item->full_name }}</td>
					<td>{{ $item->address }}</td>
					<td>{{ $item->age }}</td>
					<td>
						<a href="{{ route('people.show', $item) }}" class="btn btn-warning text-white">Edit</a>
						<a href="{{ route('people.delete', $item) }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection
