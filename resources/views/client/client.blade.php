@extends('layouts.client')

@section('content')
<div id="broadcasts">	
	<div class="row">
		<div class="col-md-6">
			<div class="owl-carousel owl-theme">
				@foreach($datas as $data)
					<div class="card" style="min-height: 500px;">
						@if($data->img)
						<img style="max-height: 200px; width: 100%;" class="card-img-top" src="{{ asset('storage/img/') }}/{{ $data->img }}" alt="Card image cap">
						@endif
					  	<div class="card-body" style="position: relative;">
						    <h1 class="card-title" style="position: absolute; top: 0;bottom: 0; left: 0; right: 0; width: 80%; height: 80%; margin: auto;">{{ $data->content }}</h1>
					    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
					    {{-- <p class="card-text">{{ $data->content }}</p> --}}
					  	</div>
					</div>	
				@endforeach
			</div>
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
</div>
@endsection

@section('script')
	<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
		// stagePadding: 40,
	    loop:true,
	    margin:10,
	    autoplay: true,
	    autoplayTimeout:5000,
    	autoplayHoverPause:true,
	    nav:true,
	    responsive:{
	        768:{
	            items:1
	        }
	    }
	})	 
	</script>
@endsection