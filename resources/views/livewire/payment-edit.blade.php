<div class="page app sidebar-mini">
    <div class="page-main">
        <!--App-Header-->
        @include('layouts.header')
        <!--/App-Header-->

        @include('layouts.sidebar')

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
                    <div class="col-md-12">
                        <div class="card m-b-20">
                            <div class="card-header">
                                <h3 class="card-title">Form Payment</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" wire:submit.prevent="edit">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Nama</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Cicilan</label>
                                                <input type="number" class="form-control @error('installment') is-invalid @enderror" wire:model="installment">
                                                @error('installment')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="price">Jumlah Angsuran</label>
                                                <input type="number" class="form-control @error('installment_amount') is-invalid @enderror" wire:model="installment_amount">
                                                @error('installment_amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4" class="form-label">Uang Muka</label>
                                            <input type="number" class="form-control @error('down_payment') is-invalid @enderror" wire:model="down_payment">
                                            @error('down_payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="form-label">Harga</label>
                                            <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model="price">
                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="form-label">ITJ</label>
                                            <input type="number" class="form-control @error('itj') is-invalid @enderror" wire:model="itj">
                                            @error('itj')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="form-label">Pelunasan</label>
                                            <input type="number" class="form-control @error('repayment') is-invalid @enderror" wire:model="repayment">
                                            @error('repayment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary ">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->

    </div>
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

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>
<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>


<!-- Bootstrap js -->
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>



<script src="{{url('/assets/plugins/datatable/jquery.dataTables.min.js')}}" defer></script>
<script src="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}" defer></script>
<script src="{{url('/assets/js/datatable.js')}}" defer></script>

<!--Counters -->
<script src="{{url('/assets/plugins/counters/counterup.min.js')}}" defer></script>
<script src="{{url('/assets/plugins/counters/waypoints.min.js')}}" defer></script>

<!-- Fullside-menu Js-->
<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}" defer></script>

<!-- Custom scroll bar Js-->
<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/admin-custom.js')}}" defer></script>