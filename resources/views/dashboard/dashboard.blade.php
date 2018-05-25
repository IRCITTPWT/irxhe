@extends('layouts.dashboard')

@section('content')
<div class="row mt-3">	 
	<div class="card card-nav-tabs">
		<div class="card-header card-header-danger">
			<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<ul class="nav nav-tabs" data-tabs="tabs">
						<li class="nav-item">
							<a class="nav-link active show" href="#text" data-toggle="tab">
								<i class="material-icons">chat</i> Text & Image
								<div class="ripple-container"></div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#video" data-toggle="tab">
								<i class="material-icons">movie</i> Video
								<div class="ripple-container"></div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card-body ">
			<div class="tab-content">
				<div class="tab-pane active show clearfix" id="text">
					<form method="POST" action="{{ route('BroadcastSimpan') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
						    <label for="exampleFormControlTextarea1">Broadcast Text</label>
						    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<div class="form-group" style="width: 50%;">
					    	<label for="exampleFormControlSelect1">Tujuan</label>
						    <select name="tujuan" class="form-control" id="exampleFormControlSelect1">
						      <option value="all">All</option>
						      <option value="1">Cabang 1</option>
						      <option value="2">Cabang 2</option>
						      <option value="3">Cabang 3</option>
						    </select>
						</div>
						{{-- <input type="file" name="img"> --}}
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						  <i class="material-icons">add_photo_alternate</i> Add Image
						</button>
						<span class="muted" id="filename"></span>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
								    <div class="fileinput-new thumbnail img-raised">
								        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
								    </div>
								    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
								    <div>
								        <span class="btn btn-raised btn-default btn-file">
								            <span class="fileinput-new">Select image</span>
								            <span class="fileinput-exists">Change</span>
								            <input id="file_input" type="file" name="img" />
								        </span>
								        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
								        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
								    </div>
								</div>
						      </div>
						      {{-- <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary">Save changes</button>
						      </div> --}}
						    </div>
						  </div>
						</div>
						<button type="submit" class="btn btn-success pull-right">Submit</button>
					</form>
				</div>
				<div class="tab-pane" id="video">
					<p> 3.</p>
				</div>
			</div>
		</div>
	</div>
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
			@endif
		  	<div class="card-body">
		  		<div class="card-category text-info">Broadcast Text</div>
		  		<div class="card-description">
		    		{{ $data->content }}
		  		</div>
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