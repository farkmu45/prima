<div>
    @include('layouts.navbar')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Dasbor Saya</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Dasbor Saya</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcrumb-->

    <!--User Dashboard-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('layouts.side-member')
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Petunjuk Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="card-body">
                                        <div class="card-pay">
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="tab1">
                                                    <dl class="card-text">
                                                        <dt>BANK: </dt>
                                                        <dd>BRI</dd>
                                                    </dl>
                                                    <dl class="card-text">
                                                        <dt>No. Rekening: </dt>
                                                        <dd> 67542897653214</dd>
                                                    </dl>
                                                    <dl class="card-text">
                                                        <dt>Atas Nama: </dt>
                                                        <dd>PRIMA</dd>
                                                    </dl>
                                                    <p class="mb-0"><strong>Catatan:</strong> Lakukan pembayaran melalui bank diatas sesuai dengan pemesanan yang telah anda lakukan</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="card-title">Pemesanan</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="table-responsive border-top">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Pesanan</th>
                                                    <th>Unit Bisnis</th>
                                                    <th>Tipe</th>
                                                    <th>Tanggal</th>
                                                    <th>ITJ</th>
                                                    <th>Harga</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (auth()->user()->orders as $order)
                                                    <tr>
                                                    <td class="text-primary">
                                                        <a href="/invoice/{{$order->code}}">{{$order->code}}</a>
                                                    </td>
                                                    <td>{{$order->payment->products->name}}</td>
                                                    <td>{{$order->payment->products->unit}}</td>
                                                    <td>{{$order->payment->products->type}}</td>
                                                    <td>{{date('d-M-y', strtotime($order->created_at))}} </td>
                                                    <td class="font-weight-semibold fs-16">Rp. {{number_format($order->payment->itj,0,',','.')}} </td>
                                                    <td class="font-weight-semibold fs-16">Rp. {{number_format($order->payment->price,0,',','.')}} </td>
                                                    <td>
                                                        @if ($order->status == '1')
                                                        <p href="#" class="badge badge-danger">Pending</p>
                                                        @endif
                                                        @if ($order->status == '2')
                                                        <p href="#" class="badge badge-warning">Processing</p>
                                                        @endif
                                                        @if ($order->status == '3')
                                                        <p href="#" class="badge badge-success">Success</p>
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
        </div>
</div>
</section>
<!--/User Dashboard-->

<!--Footer Section-->
<section>
    <footer class="bg-dark-purple text-white">
        <div class="bg-dark-purple text-white p-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
                        Copyright © 2020 <a href="#" class="fs-14 text-primary">Investasi Prima</a>. Support by <a href="https://primaitech.com" class="fs-14">PrimaITech</a> All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

<!-- JQuery js-->
<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>

<!--Horizontal Menu-->
<script src="{{url('/assets/plugins/horizontal-menu/horizontal.js')}}" defer></script>
</div>