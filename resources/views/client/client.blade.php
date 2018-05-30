@extends('layouts.client')

@section('content')
@include('partials.navbar')
<div class="container-fluid">
	<div id="broadcasts">	
		<div class="row">
			<div class="col-md-6">
				<h3 class="mb-0">Broadcast Cabang</h3>
				<div class="owl-carousel owl-theme">
					@foreach($datas as $data)
						<div class="card" style="min-height: 700px;">
							@if($data->img)
							<img style="max-height: 500px; width: 100%;" class="card-img-top" src="{{ asset('storage/img/') }}/{{ $data->img }}" alt="Card image cap">
							@elseif($data->vid)
								<video class="embed-responsive embed-responsive-21by9" controls>
								  <source class="embed-responsive-item" src="{{ asset('storage/vid/')}}/{{ $data->vid }}" type="video/mp4">
								  Your browser does not support the video tag.
								</video>
							@endif
							@if($data->content)
						  	<div class="card-body" style="position: relative;">
							    <h1 class="card-title" style="position: absolute; top: 0;bottom: 0; left: 0; right: 0; width: 80%; height: 80%; margin: auto;">{{ $data->content }}</h1>
						    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
						    {{-- <p class="card-text">{{ $data->content }}</p> --}}
						  	</div>
						  	@endif
						</div>	
					@endforeach
				</div>
			</div>
			<div class="col-md-6">
				<h3>Broadcast Semuanya</h3>
				<div class="owl-carousel owl-theme">
					@foreach($alls as $data)
						<div class="card" style="min-height: 700px;">
							@if($data->img)
							<img style="max-height: 500px; width: 100%;" class="img-fluid card-img-top" src="{{ asset('storage/img/') }}/{{ $data->img }}" alt="Card image cap">
							@elseif($data->vid)
								<video class="embed-responsive embed-responsive-21by9" controls>
								  <source class="embed-responsive-item" src="{{ asset('storage/vid/')}}/{{ $data->vid }}" type="video/mp4">
								  Your browser does not support the video tag.
								</video>
							@endif
							@if($data->content)
						  	<div class="card-body" style="position: relative;">
							    <h1 class="card-title" style="position: absolute; top: 0;bottom: 0; left: 0; right: 0; width: 80%; height: 80%; margin: auto;">{{ $data->content }}</h1>
						    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
						    {{-- <p class="card-text">{{ $data->content }}</p> --}}
						  	</div>
						  	@endif
						</div>	
					@endforeach
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
	    autoplayTimeout:10000,
    	autoplayHoverPause:true,
	    nav:true,
	    responsive:{
	        768:{
	            items:1
	        },
	        360:{
	        	items:1
	        }
	    }
	})	 
	</script>
@endsection