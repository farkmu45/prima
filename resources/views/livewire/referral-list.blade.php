<div class="page app sidebar-mini">
		<div class="page-main">
			<!--App-Header-->
			<div class="app-header1 header py-1 d-flex">
				<div class="container-fluid">
					<div class="d-flex">
						<a class="header-brand" href="index.html">
							<img src="{{url('/assets/images/brand/logo.png')}}" class="header-brand-img" alt="Reallist logo">
						</a>
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
						<div class="header-navicon">
							<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
								<i class="fa fa-search"></i>
							</a>
						</div>

						<div class="d-flex order-lg-2 ml-auto">
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon full-screen-link">
									<i class="fe fe-maximize-2" id="fullscreen-button"></i>
								</a>
							</div>
							<div class="dropdown ">
								<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
									<img src="{{url('/assets/images/faces/male/25.jpg')}}" alt="profile-img" class="avatar avatar-md brround">
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
									<a class="dropdown-item" href="/profile">
										<i class="dropdown-icon icon icon-user"></i> My Profile
									</a>
									<a class="dropdown-item" href="editprofile.html">
										<i class="dropdown-icon  icon icon-settings"></i> Account Settings
									</a>
									<a class="dropdown-item">
										<i class="dropdown-icon icon icon-power"></i> Log out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
										<table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
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