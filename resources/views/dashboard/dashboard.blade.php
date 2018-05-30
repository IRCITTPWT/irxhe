@extends('layouts.dashboard')

@section('content')
<div class="row mt-3">	 
	@include('dashboard.menuDashboard')
	<div class="w-100">
		<h1 class="float-left">Broadcast All</h1>
		<div class="dropdown float-right align-middle">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    <i class="material-icons">filter_list</i> Filter
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item" href="#">All</a>
		    <a class="dropdown-item" href="#">Text</a>
		    <a class="dropdown-item" href="#">Image</a>
		    <a class="dropdown-item" href="#">Video</a>
		  </div>
		</div>
	</div>
	@if(count($datas) > 0)
		@foreach($datas as $data)
		<div class="col-lg-4">
			<div class="card" style="margin:20px 0; height: 370px;">
				@if($data->img)
				<img style="min-height: 200px; width: 100%;" class="card-img-top" src="{{ asset('storage/img/') }}/{{ $data->img }}" alt="Card image cap">
				@elseif($data->vid)
					<video class="embed-responsive embed-responsive-21by9" controls>
					  <source class="embed-responsive-item" src="{{ asset('storage/vid/')}}/{{ $data->vid }}" type="video/mp4">
					  Your browser does not support the video tag.
					</video>
				@endif
				@if($data->content)
				  	<div class="card-body">
				  		<h3 class="card-description">
				    		{{ $data->content }}
				  		</h3>
				  	</div>
				@endif
				<div class="card-footer">
					<div class="card-category text-info">Broadcast<span class="text-muted"> Tujuan {{ $data->tujuan }}</span></div>
				</div>
			</div>
		</div>
		@endforeach
	@endif
</div>
@endsection

@section('script')
<script type="text/javascript">
	$('#file_input').change(function() {
	  let data = $('#filename').html(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');
	})
</script>
@endsection