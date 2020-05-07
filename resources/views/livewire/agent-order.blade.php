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
								<div class="card-title">All Agent Order</div>
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
												<th>Account Number</th>
												<th>Order Name</th>
												<th>Unit Business</th>
												<th>Type</th>
												<th>Payment</th>
												<th>ITJ</th>
												<th>Price</th>
												<th>Status</th>
												<th>Edit Status</th>
												{{-- <th>Actions</th> --}}
											</tr>
										</thead>
										<tbody>

											@foreach ($orders as $key => $order)
											<tr>
												<td>{{$key + 1}}</td>
												<td>{{$order->user->name}}</td>
												<td>{{$order->user->email}}</td>
												<td>{{$order->user->phone_number}}</td>
												<td>{{$order->user->account_number}}</td>
												<td>{{$order->payment->products->name}}</td>
												<td>{{$order->payment->products->unit}}</td>
												<td>{{$order->payment->products->type}}</td>
												<td>{{$order->payment->name}}</td>
												<td>Rp. {{number_format($order->payment->itj,0,',','.')}}</td>
												<td>Rp. {{number_format($order->payment->price,0,',','.')}}</td>
												<td>
													@if ($order->status == "1")
													<p class="badge badge-danger">Pending</p>
													@elseif($order->status == "2")
													<p class="badge badge-warning">Processsing</p>
													@elseif($order->status == "3")
													<p class="badge badge-success">Success</p>
													@else
													<p class="badge badge-danger">Pending</p>
													@endif
												</td>
												<td>
													<form action="/admin/agents/orders/{{$order->id}}" method="post">
														@csrf
														@method('PATCH')
														<select class="form-control" name="orderId" onchange="this.form.submit()">
															@if ($order->status == "1")
															<option value="1" selected>Pending</option>
															<option value="2">Processing</option>
															<option value="3">Success</option>
															@elseif($order->status == "2")
															<option value="1">Pending</option>
															<option value="2" selected>Processing</option>
															<option value="3">Success</option>
															@elseif($order->status == "3")
															<option value="1">Pending</option>
															<option value="2">Processing</option>
															<option value="3" selected>Success</option>
															@else
															<option value="1" selected>Pending</option>
															<option value="2">Processing</option>
															<option value="3">Success</option>
															@endif
														</select>
													</form>
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