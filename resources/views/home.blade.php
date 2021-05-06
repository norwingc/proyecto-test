@extends('template.template')

@section('content')

	<div>
		<people-index :people="{{ $people }}" :new_people="{{ $new_people }}"/>
	</div>

@endsection
