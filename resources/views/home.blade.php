@extends('template.template')

@section('content')

	<div>
		<people-index :people="{{ $people }}"/>
	</div>

@endsection
