	<div class="page app sidebar-mini">
		<div class="page-main">
			<!--App-Header-->
			@include('layouts.header')
			<!--/App-Header-->

			<!-- Sidebar menu-->
			@include('layouts.sidebar')
			<!-- /Sidebar menu-->

			<!--App-Content-->
			<div class="app-content  my-3 my-md-5">
				<div class="side-app">

					<!-- Page-Header-->
					<div class="page-header">
						<h4 class="page-title">Member</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Member</li>
							<li class="breadcrumb-item active" aria-current="page">Member List</li>
						</ol>
					</div>
					<!-- /Page-Header-->
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">All Member</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
											<thead>
												<tr>
													<th>No.</th>
													<th>Name</th>
													<th>Email</th>
													<th>Phone Number</th>
													<th>Position</th>
													<th>Referral Code</th>
													<th>Commission</th>
													<th>Edit Position</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

												@foreach ($members as $key => $member)
												<tr>
													<td>{{$key + 1}}</td>
													<td>{{$member->name}}</td>
													<td>{{$member->email}}</td>
													<td>{{$member->phone_number}}</td>
													<td>{{$member->role->name}}</td>
													<td>{{$member->referral_code == null ? '' : $member->referral_code }}</td>
													<td>{{$member->role->commission}}%</td>
													<td>
													<form action="/admin/members/{{$member->id}}" method="post">
														@csrf
														@method('patch')
														<select class="form-control" name="role_id" onchange="this.form.submit()">
															<option value="2" {{$member->role->id == 2 ? 'selected' : ''}}>Member</option>
															<option value="3" {{$member->role->id == 3 ? 'selected' : ''}}>Agent 1</option>
															<option value="4" {{$member->role->id == 4 ? 'selected' : ''}}>Agent 2</option>
															<option value="5" {{$member->role->id == 5 ? 'selected' : ''}}>Agent 3</option>
														</select>
													</form>
													</td>
													<td>
														<button class="btn btn-danger">Delete</button>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2019 <a href="#">Reallist</a>. Designed by <a href="#">Spruko</a> All
							rights
							reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- / Footer-->

		</div>
	</div>

	<!-- Message Modal -->
	<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="example-Modal3">Edit Member</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="recipient-name" class="form-control-label">Role Member</label>
							<select class="form-control" name="role">
								<option selected>Select Role Member</option>
								@foreach ($roles as $role)
									<option value="{{$role->id}}">{{$role->name}}</option>
								@endforeach
							</select>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
                
		<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>

		<!-- Bootstrap js -->
		<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
		<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>

		<!-- Fullside-menu Js-->
		<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}" defer></script>

		<!-- Data tables -->
		<script src="{{url('/assets/plugins/datatable/jquery.dataTables.min.js')}}" defer></script>
		<script src="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}" defer></script>
		<script src="{{url('/assets/js/datatable.js')}}" defer></script>

		<!-- Custom Js-->
		<script src="{{url('/assets/js/admin-custom.js')}}" defer></script>
