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
						<h4 class="page-title">Payment</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Payment</li>
							<li class="breadcrumb-item active" aria-current="page">Payment List</li>
						</ol>
					</div>
					<!-- /Page-Header-->
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">All Payment</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
											<thead>
												<tr>
													<th>No.</th>
													<th>Nama</th>
													<th>ITJ</th>
													<th>Cicilan</th>
													<th>Jumlah Angsuran</th>
													<th>Uang Muka</th>
													<th>Pelunasan</th>
													<th>Harga</th>
													<th>Nama Produk</th>
													<th>Unit</th>
													<th>Tipe</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($payments as $key => $payment)
												<tr>
													<td>{{$key + 1}}</td>
													<td>{{$payment->name}}</td>
													<td>{{'Rp. '.number_format($payment->itj,0,',','.')}}</td>
													<td>{{$payment->installment ? 'Rp. '.number_format($payment->installment,0,',','.') : 0}}</td>
													<td>{{$payment->installment_amount ? $payment->installment_amount : 0}}</td>
													<td>{{'Rp. '.number_format($payment->down_payment,0,',','.')}}</td>
                                                    <td>{{$payment->repayment ? 'Rp. '.number_format($payment->repayment,0,',','.') : 0}}</td>
                                                    <td>{{'Rp. '.number_format($payment->price,0,',','.')}}</td>
                                                    <td>{{$payment->products->name}}</td>
                                                    <td>{{$payment->products->unit}}</td>
                                                    <td>{{$payment->products->type}}</td>
                                                    <td>
													<a class="btn btn-warning" href="/admin/payments/{{$payment->id}}/edit">Edit</a>
														<button class="btn btn-danger" wire:click="delete({{$payment->id}})">Delete</button>
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
							Copyright © 2020 <a href="#" class="fs-14 text-primary">Investasi Prima</a>. Support by <a href="#" class="fs-14 text-primary">PrimaITech</a> All rights reserved.
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