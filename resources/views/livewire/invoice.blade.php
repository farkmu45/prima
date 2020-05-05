<div>
    <div class="header-main">       <!--/Topbar-->

        <!-- Header -->
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo"><img src="{{url('/assets/images/brand/logo.png')}}" width="120" alt="" /></span>
                <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- /Header -->

        <!-- Horizontal-menu -->
        <div class="horizontal-main bg-dark-transparent clearfix">
           @include('layouts.navbar')
        </div>
    </div>
    <!--/Horizontal-menu -->

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="{{url('/assets/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Invoice</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Invoice-->
    <section class="sptb">
        <div class="container">
            <div class="card mb-0">
                <div class="card-header">
                <h3 class="card-title">{{$invoice->code}}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive push">
                        <table class="table table-bordered table-hover text-nowrap">
                            <tr>
                                <th class="text-center ">No.</th>
                                <th>Item</th>
                                <th>Pembayaran</th>
                                <th>ITJ</th>
                                <th class="text-right">Total Harga</th>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>
                                    <p class="font-w600 mb-1">{{$invoice->payment->products->name}}</p>
                                    <div class="text-muted">Tipe {{$invoice->payment->products->type}} </div>
                                </td>
                                <td>
                                    {{$invoice->payment->name}}
                                </td>
                                <td>
                                    Rp. {{number_format($invoice->payment->itj,0,',','.')}}
                                </td>

                                <td class="text-right">Rp. {{number_format($invoice->payment->price,0,',','.')}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" class="font-w600 text-right">No Rekening</td>
                                <td class="text-right">12389083120</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" class="font-weight-semibold text-uppercase text-right">Total</td>
                                <td class="font-weight-bold text-right fs-18">RP. {{number_format($invoice->payment->price,0,',','.')}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="4" class="text-right">
                                    <button type="button" class="btn btn-info" onClick="javascript:window.print();"><i class="icon icon-printer"></i> Print Invoice</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                </div>
            </div>
        </div>
    </section>
    <!--/Invoice-->

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

<!-- Google Maps Plugin -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAykAdIIsNMu0V2wyGOMQcguo8zKngWlyM"></script>
<script src="{{url('/assets/plugins/maps-google/jquery.googlemap.js')}}" defer></script>
<script src="{{url('/assets/plugins/maps-google/map.js')}}" defer></script>

<!--Owl Carousel js -->
<script src="{{url('/assets/plugins/owl-carousel/owl.carousel.js')}}" defer></script>

<!--Horizontal Menu-->
<script src="{{url('/assets/plugins/horizontal-menu/horizontal.js')}}" defer></script>

<!--JQuery TouchSwipe js-->
<script src="{{url('/assets/js/jquery.touchSwipe.min.js')}}" defer></script>

<!--Select2 js -->
<script src="{{url('/assets/plugins/select2/select2.full.min.js')}}" defer></script>
<script src="{{url('/assets/js/select2.js')}}" defer></script>

<!-- Cookie js -->
<script src="{{url('/assets/plugins/cookie/jquery.ihavecookies.js')}}" defer></script>
<script src="{{url('/assets/plugins/cookie/cookie.js')}}" defer></script>

<!-- Custom scroll bar Js-->
<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

<!-- sticky Js-->
<script src="{{url('/assets/js/sticky.js')}}" defer></script>

<!-- Swipe Js-->
<script src="{{url('/assets/js/swipe.js')}}" defer></script>

<!-- Scripts Js-->
<script src="{{url('/assets/js/owl-carousel.js')}}" defer></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/custom.js')}}" defer></script>