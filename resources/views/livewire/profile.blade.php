<div>
    @include('layouts.navbar')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">My Dashboard</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
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
                    <form action="/member/profile" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="id_number" value="{{auth()->user()->id_number}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="place_of_birth" value="{{auth()->user()->place_of_birth}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="date_of_birth" value="{{auth()->user()->date_of_birth}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Telepon</label>
                                    <input type="number" class="form-control" name="phone_number" value="{{auth()->user()->phone_number}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="gender" class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
                                            <optgroup label="Categories">
                                                <option>--Select--</option>
                                                <option value="L" {{auth()->user()->gender == "L" ? "selected" : ""}}>Laki-laki</option>
                                                <option value="P" {{auth()->user()->gender == "P" ? "selected" : ""}}>Perempuan</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                    <input type="text" name="address" value="{{auth()->user()->address}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Desa / Kelurahan</label>
                                    <input type="text" class="form-control" name="village" value="{{auth()->user()->village}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" name="sub_district" value="{{auth()->user()->sub_district}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Kota / Kabupaten</label>
                                    <input type="text" class="form-control" name="city" value="{{auth()->user()->city}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" name="province" value="{{auth()->user()->province}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">Rekening Bank</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Nama Bank</label>
                                    <input type="text" class="form-control" name="bank_name" value="{{auth()->user()->bank_name}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">No Rekening</label>
                                    <input type="text" class="form-control" name="account_number" value="{{auth()->user()->account_number}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Nama Pemilik Rekening</label>
                                    <input type="text" class="form-control" name="account_name" value="{{auth()->user()->account_name}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">Foto Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="col-lg-4 col-sm-12">
                                    <input type="file" class="dropify" name="photo" value="{{auth()->user()->photo}}"/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="col-lg-4 col-sm-12">
                                    <input type="file" class="dropify" name="id_photo" value="{{auth()->user()->id_photo}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                    </form>
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
                            Copyright © 2020 <a href="#" class="fs-14 text-primary">Investasi Prima</a>. Support by <a href="#" class="fs-14 text-primary">PrimaITech</a> All rights reserved.
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

    <!-- Bootstrap js -->
    <script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
    <script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>

    <!--JQuery Sparkline Js-->
    <script src="{{url('/assets/js/vendors/jquery.sparkline.min.js')}}" defer></script>

    <!-- Circle Progress Js-->
    <script src="{{url('/assets/js/vendors/circle-progress.min.js')}}" defer></script>

    <!-- Star Rating Js-->
    <script src="{{url('/assets/plugins/rating/jquery.rating-stars.js')}}" defer></script>

    <!--Owl Carousel js -->
    <script src="{{url('/assets/plugins/owl-carousel/owl.carousel.js')}}" defer></script>

    <!--Horizontal Menu-->
    <script src="{{url('/assets/plugins/horizontal-menu/horizontal.js')}}" defer></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{url('/assets/js/jquery.touchSwipe.min.js')}}" defer></script>

    <!--Select2 js -->
    <script src="{{url('/assets/plugins/select2/select2.full.min.js')}}" defer></script>
    <script src="{{url('/assets/js/select2.js')}}" defer></script>

    <script src="{{url('/assets/plugins/fileuploads/js/dropify.min.js')}}" defer></script>

    <!-- Count Down-->
    <script src="{{url('/assets/plugins/count-down/jquery.lwtCountdown-1.0.js')}}" defer></script>

    <!-- Custom scroll bar Js-->
    <script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

    <!-- sticky Js-->
    <script src="{{url('/assets//js/sticky.js')}}" defer></script>

    <!-- Scripts Js-->
    <script src="{{url('/assets/js/owl-carousel.js')}}" defer></script>

    <!-- Custom Js-->
    <script src="{{url('/assets/js/custom.js')}}" defer></script>
</div>