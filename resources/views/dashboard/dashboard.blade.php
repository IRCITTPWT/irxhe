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
							<a class="nav-link active show" href="#profile" data-toggle="tab">
								<i class="material-icons">chat</i> Text
								<div class="ripple-container"></div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#messages" data-toggle="tab">
								<i class="material-icons">add_photo_alternate</i> Gambar
								<div class="ripple-container"></div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#settings" data-toggle="tab">
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
				<div class="tab-pane active show clearfix" id="profile">
					<form method="POST" action="{{ route('BroadcastSimpan') }}">
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
						<div class="fileinput fileinput-new text-center" data-provides="fileinput">
						    <div class="fileinput-new thumbnail img-raised">
						        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
						    </div>
						    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
						    <div>
						        <span class="btn btn-raised btn-round btn-default btn-file">
						            <span class="fileinput-new">Select image</span>
						            <span class="fileinput-exists">Change</span>
						            <input type="file" name="..." />
						        </span>
						        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
						    </div>
						</div>	
						<button type="submit" class="btn btn-success pull-right">Kirim</button>
					</form>
				</div>
				<div class="tab-pane" id="messages">
					<p> 2.</p>
				</div>
				<div class="tab-pane" id="settings">
					<p> 3.</p>
				</div>
			</div>
		</div>
	</div>
	@foreach($datas as $data)
	<div class="card" style="margin:20px 0">
	  <div class="card-body">
	  	<div class="card-title">Broadcast Text</div>
	  	<div class="card-text">
	    	{{ $data->content }}
	  	</div>
	  </div>
	</div>
	@endforeach
</div>
@endsection