<div>
    <div class="header-main">

        <!-- Houses Header -->
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo"><img src="{{url('/assets/images/brand/logo.png')}}" width="120" alt="" /></span>
                <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- /Houses Header -->

        <!-- Horizontal-menu -->
        @include('layouts.navbar')
    </div>
    <!-- /Horizontal-menu -->

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="{{url('/assets/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Pricing</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Pricing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Pricing Tables 1-->
    <div class="sptb">
        <div class="container">
            <div class="row">
                @foreach ($product->payments as $key => $payment)
                <div class="col-xl-4 col-md-6 col-sm-12 col-lg-4">
                    <div class="pricingTable2 pink mb-4 mb-xl-0">
                        <div class="pricingTable2-header">
                            <h3>{{$payment->name}}</h3>
                        </div>
                        <div class="pricing-plans" style="background-color: #429039">
                            <span class="price-value1">Rp. {{number_format($payment->price,0,',','.')}}</span>
                        </div>
                        <div class="pricingContent2">
                            <ul>
                                <li>ITJ : <b>{{number_format($payment->itj,0,',','.')}}</b></li>
                                <li>Uang Muka : <b>{{number_format($payment->down_payment,0,',','.')}}</b></li>
                                <li>Jumlah Angsuran : <b>{{number_format($payment->installment_amount,0,',','.')}}</b></li>
                                <li>Pelunasan : <b>{{number_format($payment->repayment,0,',','.')}}</b></li>
                            </ul>
                        </div><!-- CONTENT BOX-->
                        <div class="pricingTable2-sign-up">
                            <form method="post" wire:submit.prevent="order({{$payment->id}})">
                                <button class="btn btn-block btn-primary">Order</a>
                            </form>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--/Pricing Tables 1-->

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
</div>
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

<!-- sticky Js-->
<script src="{{url('/assets//js/sticky.js')}}" defer></script>

<!-- sticky Js-->
<script src="{{url('/assets//js/sticky.js')}}" defer></script>

<!-- Custom scroll bar Js-->
<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

<!-- Swipe Js-->
<script src="{{url('/assets/js/swipe.js')}}" defer></script>

<!-- Scripts Js-->
<script src="{{url('/assets/js/owl-carousel.js')}}" defer></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/custom.js')}}" defer></script>