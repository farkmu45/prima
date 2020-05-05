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
						<h4 class="page-title">Agent</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Agent</li>
							<li class="breadcrumb-item active" aria-current="page">Agent List</li>
						</ol>
					</div>
					<!-- /Page-Header-->
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">All Agent</div>
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
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

												@foreach ($agents as $key => $agent)	
												<tr>
												<td>{{$key + 1}}</td>
													<td>{{$agent->name}}</td>
													<td>{{$agent->email}}</td>
													<td>{{$agent->phone_number}}</td>
													<td>{{$agent->role->name}}</td>
													<td>{{$agent->referral_code == null ? 'Empty' : 3}}</td>
													<td>{{$agent->role->commission}}%</td>
													<td>
														<a href="" class="btn btn-warning">Edit</a> 
														<button class="btn btn-danger" wire:click="delete({{$agent->id}})">Delete</button>
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