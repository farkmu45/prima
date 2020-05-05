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
												<td><a style="color: #ed5151 !important" href="/admin/products/{{$product->id}}/payments/add">{{$product->name}}</a></td>
													<td>{{$product->type}}</td>
													<td>Rp. {{number_format($product->price,0,',','.')}}</td>
													<td>{{$product->bedroom}}</td>
													<td>{{$product->bathroom}}</td>
													<td> <img src="{{url($product->photo)}}" class="img-fluid" width="100px" alt="" srcset=""></td>
													<td> <img src="{{url($product->first_floor)}}" class="img-fluid" width="100px" alt="" srcset=""></td>
													<td> <img src="{{url($product->second_floor)}}" class="img-fluid" width="100px" alt="" srcset=""></td>
													<td>{{url($product->room_video)}}</td>
													<td>{{url($product->survey_video)}}</td>
													<td>{{$product->description}}</td>
													<td>{{$product->show_status == 0 ? "False" : "True"}}</td>
												<td><a href="/admin/products/{{$product->id}}/edit" class="btn btn-warning">Edit</a>
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

		<!-- JQuery js-->
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