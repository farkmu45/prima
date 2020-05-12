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
                        <h1 class="">Referrals</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Referrals</li>
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
                            <h3 class="card-title">Referrals</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <p class="mt-5"><b>Link referral anda :</b> {{request()->getHttpHost().'/'.auth()->user()->referral_code}}</p>
                                    <p class="mt-5">
                                        @if (auth()->user()->alt_referral_code)
                                            <b>Link referral alternatif anda : </b> {{request()->getHttpHost().'/'.auth()->user()->alt_referral_code}}</p>
                                        @else
                                            <b>Link referral alternatif anda : </b> Belum ditambahkan</p>
                                        @endif
                                    <form action="/member/referral" method="post">
                                        @csrf
                                        <div class="d-flex">
                                            <p class="m-0 align-self-center">{{request()->getHttpHost().'/'}}</p> 
                                            <input class="form-control @error('commission') is-invalid @enderror" style="width: 200px;" type="text" name="alt_referral_code" id="">
                                            @error('alt_referral_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    <button class="btn btn-primary">{{auth()->user()->alt_referral_code ? 'Ubah' : 'Tambah Link'}}</button>
                                    </form>
                                    <div class="table-responsive border-top mt-5">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Diundang</th>
                                                    {{-- <th>Actions</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @foreach (auth()->user()->referrals as $key => $referral)    
                                                <td>{{$key}}</td>
                                                <td>{{$referral->user->name}}</td>
                                                    <td>{{$referral->user->email}}</td>
                                                    <td>{{$referral->user->name}}</td>
                                                <td>{{$referral->created_at}}</td>
                                                    @endforeach
                                                </tr>
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