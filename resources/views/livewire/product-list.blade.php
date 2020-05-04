	<div class="page">
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
									<img src="../assets/images/faces/male/25.jpg" alt="profile-img" class="avatar avatar-md brround">
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
						<h4 class="page-title">Product</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Product</li>
							<li class="breadcrumb-item active" aria-current="page">Product List</li>
						</ol>
					</div>
					<!-- /Page-Header-->
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">All Product</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
											<thead>
												<tr>
													<th>No.</th>
													<th>Name</th>
													<th>Type</th>
													<th>Price</th>
													<th>Bedroom</th>
													<th>Bathroom</th>
													<th>Photo</th>
													<th>First Floor</th>
													<th>Second Floor</th>
													<th>Room Video</th>
													<th>Survey Video</th>
													<th>Description</th>
													<th>Show Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($products as $key => $product)
												<tr>
													<td>{{$key + 1}}</td>
												<td><a style="color: #ed5151 !important" href="/admin/products/{{$product->id}}/payments">{{$product->name}}</a></td>
													<td>{{$product->type}}</td>
													<td>{{$product->price}}</td>
													<td>{{$product->bedroom}}</td>
													<td>{{$product->bathroom}}</td>
													<td> <img src="{{url($product->photo)}}" class="img-fluid" width="100px" alt="" srcset=""></td>
													<td> <img src="{{url($product->first_floor)}}" class="img-fluid" width="100px" alt="" srcset=""></td>
													<td> <img src="{{url($product->second_floor)}}" class="img-fluid" width="100px" alt="" srcset=""></td>
													<td>{{url($product->room_video)}}</td>
													<td>{{url($product->survey_video)}}</td>
													<td>{{$product->description}}</td>
													<td>{{$product->show_status == 0 ? "False" : "True"}}</td>
													<td><a href="" class="btn btn-warning">Edit</a> <button class="btn btn-danger" wire:submit.prevent="delete($id}})">Delete</button></td>
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

	<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>


	<!-- Bootstrap js -->
	<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
	<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>

	<!--JQuery Sparkline Js-->
	<script src="{{url('/assets/js/vendors/jquery.sparkline.min.js')}}" defer></script>

	<!-- Circle Progress Js-->
	<script src="{{url('/assets/js/vendors/circle-progress.min.js')}}" defer></script>

	<script src="{{url('/assets/plugins/datatable/jquery.dataTables.min.js')}}" defer></script>
	<script src="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}" defer></script>
	<script src="{{url('/assets/js/datatable.js')}}" defer></script>
	<!-- Star Rating Js-->
	<script src="{{url('/assets/plugins/rating/jquery.rating-stars.js')}}" defer></script>

	<!--Counters -->
	<script src="{{url('/assets/plugins/counters/counterup.min.js')}}" defer></script>
	<script src="{{url('/assets/plugins/counters/waypoints.min.js')}}" defer></script>

	<!-- Fullside-menu Js-->
	<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}" defer></script>

	<!-- CHARTJS CHART -->
	<script src="{{url('/assets/plugins/chart/Chart.bundle.js')}}" defer></script>
	<script src="{{url('/assets/plugins/chart/utils.js')}}" defer></script>

	<!-- Custom scroll bar Js-->
	<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

	<!-- ECharts Plugin -->
	<script src="{{url('/assets/plugins/echarts/echarts.js')}}" defer></script>
	<script src="{{url('/assets/plugins/echarts/echarts.js')}}" defer></script>
	<script src="{{url('/assets/js/index1.js')}}" defer></script>

	<!-- Custom Js-->
	<script src="{{url('/assets/js/admin-custom.js')}}" defer></script>