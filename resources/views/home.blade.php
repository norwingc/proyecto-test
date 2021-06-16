<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Agenda</h1>

	<form action="{{ route('people.store') }}" method="POST">
		@csrf
		<label>Full Name</label>
		<input type="text" name="full_name">
		<label>Phone</label>
		<input type="text" name="phone">
		<button type="submit">Save</button>
	</form>

	<table style="margin-top: 2em">
		<thead>
			<tr>
				<th>Full Name</th>
				<th>Phone</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($people as $person)
				<tr>
					<td>{{ $person->full_name }}</td>
					<td>{{ $person->phone }}</td>
					<td>
						<a href="{{ route('people.edit', $person->id) }}">Edit</a>
						<a href="{{ route('people.delete', $person->id) }}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>

</html>

