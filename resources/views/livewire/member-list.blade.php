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
													<th>Alternate Referral Code</th>
													<th>Wallet</th>
													<th>Status</th>
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
													<td>{{$member->alt_referral_code == null ? '' : $member->alt_referral_code }}</td>
													<td>{{$member->wallet}}</td>
													@if (!$member->deleted_at)
													<td>
														<p class="badge badge-success">Active</p>
													</td>
													@else
													<td>
														<p class="badge badge-danger">Deactivated</p>
													</td>
													@endif
													@if ($member->deleted_at)
													<td><button class="btn btn-success" wire:click="activate({{$member->id}})">Activate</button></td>
													@else
													<td><button class="btn btn-danger" wire:click="delete({{$member->id}})">Deactivate</button></td>
													@endif
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
							Copyright © 2020 Investasi Prima. Support by <a href="https://primaitech.com" class="fs-14">PrimaITech</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- / Footer-->

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