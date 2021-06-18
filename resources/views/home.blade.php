@extends('layouts.app')

@section('content')

<div class="container">
	<h1 class="mt-4 text-center title">Agenda</h1>
	<div>
		<people-index :people="{{ $people }}"/>
	</div>

</div>
@endsection
