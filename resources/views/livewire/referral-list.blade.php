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
					<h4 class="page-title">Referral</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Referral</li>
						<li class="breadcrumb-item active" aria-current="page">Referral List</li>
					</ol>
				</div>
				<!-- /Page-Header-->
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">All Referral</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="table table-bordered table-hover text-nowrap">
										<thead>
											<tr>
												<th>No.</th>
												<th>User Name</th>
												<th>User Email</th>
												<th>Invited By</th>
												<th>Inviter Email</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($referralList as $key => $referral)
											<tr>
												<td>{{$key + 1}}</td>
												<td>{{$referral->user->name}}</td>
												<td>{{$referral->user->email}}</td>
												<td>{{$referral->referrer->name}}</td>
												<td>{{$referral->referrer->email}}</td>
												<td>{{$referral->created_at}}</td>
												<td>
													<button class="btn btn-danger" wire:click="delete({{$referral->id}})">Delete</button>
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
						Copyright © 2020 Investasi Prima. Support by <a href="https://primaitech.com" class="fs-14">PrimaITech</a> All rights reserved.
					</div>
				</div>
			</div>
		</footer>
		<!-- / Footer-->

	</div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

<!-- JQuery js-->

<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>

<!-- Data tables -->
<script src="{{url('/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('/assets/js/datatable.js')}}"></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/admin-custom.js')}}"></script>