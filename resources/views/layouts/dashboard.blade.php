@extends('layouts.master')

@section('main')
	@include('partials.navbar')
	<div class="container">
		@yield('content')
	</div>
@endsection