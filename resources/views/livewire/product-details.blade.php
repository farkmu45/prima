<div>
    <!--Topbar-->
    <div class="header-main">
        <!-- Horizontal-menu -->
        <div class="horizontal-main bg-dark-transparent clearfix">
            @include('layouts.navbar')
        </div>
    </div>
    <!-- /Horizontal-menu -->
    <!--/BreadCrumb-->

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-12">

                    <!--Classified Description-->
                    <div class="card overflow-hidden">
                        <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Promo</span></div>
                        <div class="card-body">
                            <div class="product-slider">
                                <div id="carousel" class="carousel slide" data-ride="carousel">
                                    <div class="arrow-ribbon2 bg-primary">Rp. {{number_format($product->price,0,',','.')}} <span class="fs-12  font-weight-normal">Per Kamar</span></div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="{{url($product->photo)}}" alt="img"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-0">
                        <div class="wideget-user-tab wideget-user-tab3">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <ul class="nav">
                                        <li class=""><a href="#tab-1" class="active" data-toggle="tab">Tampak Depan</a></li>
                                        <li><a href="#tab-2" data-toggle="tab" class="">Denah Lantai 1</a></li>
                                        <li><a href="#tab-3" data-toggle="tab" class="">Denah Lantai 2</a></li>
                                        <li><a href="#tab-4" data-toggle="tab" class="">Video 3D Kamar</a></li>
                                        <li><a href="#tab-5" data-toggle="tab" class="">Video Survey Online Myrra</a></li>
                                        <li><a href="#tab-6" data-toggle="tab" class="">Deskripsi</a></li>
                                        <li><a href="#tab-7" data-toggle="tab" class="">PDF</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content border-0 p-5 bg-white details-tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-6  col-md-12">
                                        <div class="card">
                                            <div class="item-card">
                                                <div class="item-card-img">
                                                    <img src="{{url($product->front_view)}}" alt="img" class="br-tr-7 br-tl-7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-6  col-md-12">
                                        <div class="card">
                                            <div class="item-card">
                                                <div class="item-card-img">
                                                    <img src="{{url($product->first_floor)}}" alt="img" class="br-tr-7 br-tl-7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-6  col-md-12">
                                        <div class="card">
                                            <div class="item-card">
                                                <div class="item-card-img">
                                                    <img src="{{url($product->second_floor)}}" alt="img" class="br-tr-7 br-tl-7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <iframe width="100%" height="450px" src="{{$product->room_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <iframe width="100%" height="450px" src="{{$product->survey_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane" id="tab-6">
                                <h3 class="card-title mb-3 font-weight-semibold">Description</h3>
                                <div class="mb-4">
                                    <p>{{$product->description}}</p>
                                </div>
                                <h4 class="mb-4">Spesifikasi</h4>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-top mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Tipe</td>
                                                        <td><span class="font-weight-bold">{{$product->type}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kamar Tidur</td>
                                                        <td><span class="font-weight-bold">{{$product->bedroom}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kamar Mandi</td>
                                                        <td><span class="font-weight-bold">{{$product->bathroom}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>AC</td>
                                                        <td><span class="font-weight-bold">{{$product->ac}}</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-7">
                                <div class="row">
                                    <div class="col-lg-6  col-md-12">
                                        <div class="card">
                                            <div class="item-card">
                                            <a href="{{url($product->pdf)}}" target="_blank" rel="noopener noreferrer">
                                                    Link PDF
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 pb-4 pl-5 pr-5 border-top bg-white">
                            <div class="list-id">
                                <div class="row">
                                    <div class="col col-auto">
                                        {{$product->created_at}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white details-tab">
                            <div class="icons">
                                <a href="/product/{{$product->id}}/pricing" class="btn btn-info icons"><i class="fas fa-money-check-alt"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section-->


    <!--Footer Section-->
    <section>
        <footer class="bg-dark-purple text-white">
            <div class="footer-main">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <h5>Disclaimer</h5>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
                            <p>Portal ini merupakan alat bantu / tools pemasaran / penjualan obyek real estate / perumahan untuk mempermudah para marketing untuk melakukan pemasaran property via online . Dan bukan portal penggalangan dana.</p>
                        </div>
                    </div>
                </div>
            </div>
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
</div>
<!--/Footer Section-->


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

<!-- Google Maps Plugin -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAykAdIIsNMu0V2wyGOMQcguo8zKngWlyM" defer></script>
<script src="{{url('/assets/plugins/maps-google/jquery.googlemap.js')}}" defer></script>
<script src="{{url('/assets/plugins/maps-google/map.js')}}" defer></script>

<!--Select2 js -->
<script src="{{url('/assets/plugins/select2/select2.full.min.js')}}" defer></script>
<script src="{{url('/assets/js/select2.js')}}" defer></script>

<!-- Count Down-->
<script src="{{url('/assets/plugins/count-down/jquery.lwtCountdown-1.0.js')}}" defer></script>

<!-- Custom scroll bar Js-->
<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

<!-- sticky Js-->
<script src="{{url('/assets//js/sticky.js')}}" defer></script>

<!-- Vertical scroll bar Js-->
<script src="{{url('/assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}" defer></script>
<script src="{{url('/assets/plugins/vertical-scroll/vertical-scroll.js')}}" defer></script>

<!-- Swipe Js-->
<script src="{{url('/assets/js/swipe.js')}}" defer></script>

<!-- Cover-image Js-->
<script src="{{url('/assets/js/owl-carousel.js')}}" defer></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/custom.js')}}" defer></script>