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
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Lenkap</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">NIK</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Telepon</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
                                            <optgroup label="Categories">
                                                <option>--Select--</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Desa / Kelurahan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Kota / Kabupaten</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Provinsi</label>
                                        <input type="text" class="form-control">
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
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">No Rekening</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Nama Pemilik Rekening</label>
                                        <input type="text" class="form-control">
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
                                        <input type="file" class="dropify" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="col-lg-4 col-sm-12">
                                        <input type="file" class="dropify" data-height="180" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
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
                            Copyright © 2019 <a href="#" class="fs-14 text-primary">Reallist</a>. Designed by <a href="#" class="fs-14 text-primary">Spruko</a> All rights reserved.
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