<div class="page app sidebar-mini">
		<div class="page-main">

			<!--App-Header-->
			<div class="app-header1 header py-1 d-flex">
				<div class="container-fluid">
					<div class="d-flex">
						<a class="header-brand" href="index.html">
							<img src="../assets/images/brand/logo.png" class="header-brand-img" alt="Reallist logo">
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
									<img src="../assets/images/faces/male/25.jpg" alt="profile-img"
										class="avatar avatar-md brround">
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
									<a class="dropdown-item" href="profile.html">
										<i class="dropdown-icon icon icon-user"></i> My Profile
									</a>
									<a class="dropdown-item" href="emailservices.html">
										<i class="dropdown-icon icon icon-speech"></i> Inbox
									</a>
									<a class="dropdown-item" href="editprofile.html">
										<i class="dropdown-icon  icon icon-settings"></i> Account Settings
									</a>
									<a class="dropdown-item" href="login.html">
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
						<h4 class="page-title">Dashboard</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</div>
					<!-- /Page-Header-->
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
							<div class="card overflow-hidden">
								<div class="card-header">
									<h3 class="card-title">Total Properties</h3>
									<div class="card-options"> <a class="btn btn-sm btn-primary" href="#">View</a>
									</div>
								</div>
								<div class="card-body ">
									<h2 class="text-dark  mt-0 font-weight-bold">4,657</h2>
									<div class="progress progress-sm mt-0 mb-2">
										<div class="progress-bar bg-primary w-75" role="progressbar"></div>
									</div>
									<div class=""><i class="fa fa-caret-up text-green"></i>10% than last year</div>
								</div>
							</div>
						</div>
						<div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card overflow-hidden">
								<div class="card-header">
									<h3 class="card-title">Total Agents</h3>
									<div class="card-options"> <a class="btn btn-sm btn-secondary" href="#">View</a>
									</div>
								</div>
								<div class="card-body ">
									<h2 class="text-dark  mt-0 font-weight-bold">2,592</h2>
									<div class="progress progress-sm mt-0 mb-2">
										<div class="progress-bar bg-secondary w-45" role="progressbar"></div>
									</div>
									<div class=""><i class="fa fa-caret-down text-danger"></i>12% than last year</div>
								</div>
							</div>
						</div>
						<div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card overflow-hidden">
								<div class="card-header">
									<h3 class="card-title">Total Sales</h3>
									<div class="card-options"> <a class="btn btn-sm btn-warning" href="#">View</a>
									</div>
								</div>
								<div class="card-body ">
									<h2 class="text-dark  mt-0 font-weight-bold">3,517</h2>
									<div class="progress progress-sm mt-0 mb-2">
										<div class="progress-bar bg-warning w-50" role="progressbar"></div>
									</div>
									<div class=""><i class="fa fa-caret-down text-danger"></i>5% than last year</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
							<div class="card overflow-hidden">
								<div class="card-header">
									<h3 class="card-title">Total Earnings</h3>
									<div class="card-options"> <a class="btn btn-sm btn-info" href="#">View</a> </div>
								</div>
								<div class="card-body ">
									<h2 class="text-dark  mt-0  font-weight-bold">$5,759</h2>
									<div class="progress progress-sm mt-0 mb-2">
										<div class="progress-bar bg-info w-25" role="progressbar"></div>
									</div>
									<div class=""><i class="fa fa-caret-up text-success"></i>15% than last year</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-8 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Last Year Overview</h3>
								</div>
								<div class="card-body">
									<div class="chart-wrapper">
										<canvas id="sales-status" class="chart-dropshadow"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Agents List</h3>
								</div>
								<div class="card-body">
									<div class="activity">
										<img src="../assets/images/faces/male/24.jpg" alt="" class="img-activity">
										<div class="time-activity">
											<div class="item-activity">
												<p class="mb-0"><b>Adam Berry</b> Add Modren Houses <b> List</b></p>
												<small class="text-muted ">30 mins ago</small>
											</div>
										</div>
										<img src="../assets/images/faces/female/10.jpg" alt="" class="img-activity">
										<div class="time-activity">
											<div class="item-activity">
												<p class="mb-0"><b>Irene Hunter</b> Add Farm Houses <b>List</b></p>
												<small class="text-muted ">1 days ago</small>
											</div>
										</div>
										<img src="../assets/images/faces/male/4.jpg" alt="" class="img-activity">
										<div class="time-activity">
											<div class="item-activity">
												<p class="mb-0"><b>John Payne</b> Add new Offices <b>List</b></p>
												<small class="text-muted ">3 days ago</small>
											</div>
										</div>
										<img src="../assets/images/faces/male/4.jpg" alt="" class="img-activity">
										<div class="time-activity">
											<div class="item-activity">
												<p class="mb-0"><b>John Payne</b> Add new Offices <b>List</b></p>
												<small class="text-muted ">3 days ago</small>
											</div>
										</div>
										<img src="../assets/images/faces/female/8.jpg" alt="" class="img-activity">
										<div class="time-activity mb-0">
											<div class="item-activity mb-0">
												<p class="mb-0"><b>Julia Hardacre</b> Add a new Deluxe <b>Flats</b></p>
												<small class="text-muted ">5 days ago</small>
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

				<!-- Back to top -->
			
			</div>
		</div>
	</div>

	<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		<!-- JQuery js-->
		<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>

		<!-- Bootstrap js -->
		<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
		<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>

		<!--JQuery Sparkline Js-->
		<script src="{{url('/assets/js/vendors/jquery.sparkline.min.js')}}" defer></script>

		<!-- Circle Progress Js-->
		<script src="{{url('/assets/js/vendors/circle-progress.min.js')}}" defer></script>

		<!-- Star Rating Js-->
		<script src="{{url('/assets/plugins/rating/jquery.rating-stars.js')}}" defer></script>

		<!--EChart Js-->
		<script src="{{url('/assets/plugins/echarts/echarts.js')}}" defer></script>

		<!-- Fullside-menu Js-->
		<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}" defer></script>

		<!-- Charts Plugin -->
		<script src="{{url('/assets/plugins/chart/Chart.bundle.js')}}" defer></script>
		<script src="{{url('/assets/plugins/chart/utils.js')}}" defer></script>

		<!-- Input Mask Plugin -->
		<script src="{{url('/assets/plugins/input-mask/jquery.mask.min.js')}}" defer></script>

		<!--Morris.js Charts Plugin -->
		<script src="{{url('/assets/plugins/morris/raphael-min.js')}}" defer></script>
		<script src="{{url('/assets/plugins/morris/morris.js')}}" defer></script>

        <!-- Index Scripts -->
		<script src="{{url('/assets/js/index2.js')}}" defer></script>

		<!-- Custom scroll bar Js-->
		<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

		<!--Counters -->
		<script src="{{url('/assets/plugins/counters/counterup.min.js')}}" defer></script>
		<script src="{{url('/assets/plugins/counters/waypoints.min.js')}}" defer></script>

		<!-- Custom Js-->
		<script src="{{url('/assets/js/admin-custom.js')}}" defer></script>