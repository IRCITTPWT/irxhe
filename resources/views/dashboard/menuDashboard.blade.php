
<div class="card card-nav-tabs">
	<form method="POST" action="{{ route('BroadcastSimpan') }}" enctype="multipart/form-data">
	@csrf
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
			<div class="tab-pane active show" id="text">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Broadcast Text</label>
					<textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="video">
				<input type="file" name="vid" value="Add Video">
			</div>
		</div>
	</div>
	<div class="card-footer clearfix">
		<div class="form-group" style="width: 50%;">
			<label for="exampleFormControlSelect1">Tujuan</label>
			<select name="tujuan" class="form-control" id="exampleFormControlSelect1" required>
				<option value=""></option>
				<option value="all">All</option>
				<option value="1">Cabang 1</option>
				<option value="2">Cabang 2</option>
				<option value="3">Cabang 3</option>
			</select>
		</div>
		<div class="form-group pull-right">
			<button type="submit" class="btn btn-success pull-right">Submit</button>
		</div>
	</div>
	</form>
</div>