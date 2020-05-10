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
                    <h4 class="page-title">Cashout</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Cashout</li>
                        <li class="breadcrumb-item active" aria-current="page">Agent Cashout List</li>
                    </ol>
                </div>
                <!-- /Page-Header-->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">All Cashout</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Bank</th>
                                                <th>Account Number</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cashout as $key => $cashout)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$cashout->user->name}}</td>
                                                <td>{{$cashout->user->phone_number}}</td>
                                                <td>{{$cashout->user->bank_name}}</td>
                                                <td>{{$cashout->user->account_number}}</td>
                                                <td>Rp. {{number_format($cashout->amount,0,',','.')}}</td>
                                                <td>
                                                    @if ($cashout->paid_off)
                                                    <p class="badge badge-success">Paid</p>
                                                    @else
                                                    <p class="badge badge-warning">Unpaid</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($cashout->paid_off)
                                                    <button class="btn btn-green" disabled wire:click="update({{$cashout->id}}, {{$cashout->paid_off}})">Pay</button>
                                                    @else
                                                    <button class="btn btn-green" wire:click="update({{$cashout->id}}, {{$cashout->paid_off}})">Pay</button>
                                                    @endif
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