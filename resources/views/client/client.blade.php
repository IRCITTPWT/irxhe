@extends('layouts.client')

@section('content')
<div class="row">
	<div class="col-md-6">
	@foreach($datas as $data)
		<div class="card" style="height: 500px;">
		  <div class="card-body" style="position: relative;">
			    <h1 class="card-title" style="position: absolute; top: 0;bottom: 0; left: 0; right: 0; width: 80%; height: 80%; margin: auto;">{{ $data->content }}</h1>
		    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
		    {{-- <p class="card-text">{{ $data->content }}</p> --}}
		  </div>
		</div>	
	@endforeach
	</div>
	<div class="col-md-6">
		<div class="card"  style="height: 500px;">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>	
	</div>
</div>
@endsection