<div>
    <div class="header-main" id="home">

        @include('layouts.navbar')
        <!--Start Horizontal-main -->
    </div>
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
                            <h3 class="card-title">Dasbor</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="card-body">
                                        <div class="card-pay">
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="tab1">
                                                    <dl class="card-text">
                                                        <dt>PENDAPATAN ANDA: </dt>
                                                        <dd>Rp. {{number_format(auth()->user()->wallet,0,',','.')}}</dd>
                                                    </dl>
                                                    <dl class="card-text">
                                                        <dt>MINIMAL CASHOUT: </dt>
                                                        <dd>Rp. 10.000</dd>
                                                    </dl>

                                                    @if ($cashoutCount > 0)
                                                    <div class="alert alert-success mt-4" role="alert">
                                                        Penarikan dana anda sedang kami proses, tunggu sebentar ya :)
                                                    </div>
                                                    @else
                                                    @if (auth()->user()->wallet > 10000)
                                                    <p class="mb-2 mt-5">Pendapatan anda telah memenuhi minimal cashout, silahkan klik tombol dibawah untuk melakukan cashout</p>
                                                    <form id="cashout" action="/cashout" method="post">
                                                        @csrf
                                                        <input type="number" name="amount" class="form-control" style="width: 300px" placeholder="Jumlah uang">
                                                        @error('amount')
                                                        <p class="mt-2" style="color: red">{{$message}}</p>
                                                        @enderror
                                                        <button type="submit" class="btn btn-primary mt-3">CASHOUT</button>
                                                    </form>

                                                    @error('user_error')
                                                    <div class="alert alert-danger mt-4" role="alert">
                                                        {{$message}}
                                                    </div>
                                                    @enderror

                                                    @error('photo_error')
                                                    <div class="alert alert-danger mt-4" role="alert">
                                                        {{$message}}
                                                    </div>
                                                    @enderror

                                                    @error('contact_error')
                                                    <div class="alert alert-danger mt-4" role="alert">
                                                        {{$message}}
                                                    </div>
                                                    @enderror

                                                    @error('nik_error')
                                                    <div class="alert alert-danger mt-4" role="alert">
                                                        {{$message}}
                                                    </div>
                                                    @enderror

                                                    <p class="mb-0 mt-9"><strong>Catatan:</strong> Pastikan anda telah mengisi data diri berupa info rekening dan data KTP</p>
                                                    @endif

                                                    @endif
                                                </div>
                                            </div>
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
                            Copyright © 2020 Investasi Prima. Support by <a href="https://primaitech.com" class="fs-14">PrimaITech</a> All rights reserved.
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