@extends('layouts.master')

@section('main')
	<div class="container-fluid">
		@yield('content')
	</div>
@endsection

@section('script-main')
	@yield('script')
@endsection