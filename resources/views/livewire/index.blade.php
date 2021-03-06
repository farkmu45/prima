<div>
    <div class="header-main" id="home">

        @include('layouts.navbar')
        <!--Start Horizontal-main -->
    </div>
    <!--/Horizontal-main -->

    <!--Start Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2"
            data-image-src="{{url('/assets/images/banners/banner1.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-7 mt-5">
                        <h1 class="mb-5">CUMA DISINI BELI RUMAH KOST DI MALANG BISA PATUNGAN MULAI 150 JUTA </h1>
                        <p>Solusi terbaik bagi anda yang ingin investasi rumah kost dengan harga terjangkau di kota
                            malang. Myrra residence menawarkan rumah kost eksklusif yang bisa dibeli dengan cara
                            patungan mulai 150 juta per kamar kost
                        </p>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    @guest
    <section class="categories">
        <div class="container">
            <div class="card mb-0 box-shadow-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6 col-sm-12 d-catmb mb-4 mb-lg-0">
                            <h5 class=" mb-1 font-weight-reguler">Ingin mendapat penghasilan?</h5>
                            <h5 class=" mb-0 font-weight-light">Cara baru bisnis properti di kota malang! Kini anda juga
                                bisa bergabung untuk investasi rumah kost eksklusif di Myrra Residence cukup dengan
                                modal 150 juta. Dengan modal 150 juta, anda berpeluang meraih keuntungan maksimal dari
                                hasil sewa dan jual beli rumah kost dengan cara patungan TANPA RIBA.
                                Dapatkan juga Peluang untuk ikut mendapakan Komisi yang Besar dengan ikut mereferensikan
                                produk kami … Yuk Gabung Bersama kami</h5>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-12 ">
                            <a href="register" class="btn btn-primary btn-lg mb-sm-0">Join Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endguest
    <!--/Section-->

    <section class="sptb bg-putih" id="why">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>MENGAPA INVESTASI PROPERTI SYARIAH?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{url('/assets/images/products/about/halal.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2 text-primary">Halal</h4>
                                    <p class="text-muted mb-0">Investasi yang halal dan sesuai Akad Syariah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{url('/assets/images/products/about/invest.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2 text-primary">Kendali Investor</h4>
                                    <p class="text-muted mb-0">Kendali Investasi mutlak di tangan Investor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{url('/assets/images/products/about/inflasi.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2 text-primary">Penangkal Inflasi</h4>
                                    <p class="text-muted mb-0">Investasi Properti sebagai penangkal terjadinya Inflasi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{url('/assets/images/products/about/aman.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2 text-primary">Aman</h4>
                                    <p class="text-muted mb-0">Transaksi Jual-Beli, Legalitas Aman & Sertifikat Hak
                                        Milik atas nama pembeli </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{url('/assets/images/products/about/profit.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2 text-primary">Menguntungkan</h4>
                                    <p class="text-muted mb-0">Mendapatkan keuntungan Capital Gain yang pasti naik
                                        setiap tahunnya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg box-shadow icon-service  about">
                                    <img src="{{url('/assets/images/products/about/hasil.png')}}" alt="img">
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2 text-primary">Penghasilan</h4>
                                    <p class="text-muted mb-0">Properti produktif juga menghasilkan Passive Income</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    <section class="sptb" id="invest">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Cara Mudah Investasi Properti melalui Online</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12 mt-5">
                    <div class="item-card overflow-hidden" style="height: 100%;">
                        <div class="item-card" style="height: 100%;">
                            <div class="card overflow-hidden mb-0" style="height: 100%;">
                                <div class="card-img" style="height: 100%;">
                                    <img src="{{url('/assets/images/product/promo.png')}}" alt="img" class="cover-image"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12 mt-5">
                    <div class="item-card overflow-hidden" style="height: 100%;">
                        <div class="item-card" style="height: 100%;">
                            <div class="card overflow-hidden mb-0" style="height: 100%;">
                                <div class="card-img" style="height: 100%;">
                                    <video src="{{url('/assets/video.mp4')}}" controls
                                        style="width: 100%; height: 100%; object-fit: cover;"
                                        class="cover-image"></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    <section class="sptb bg-putih" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item-card overflow-hidden" style="height: 100%;">
                        <div class="card text-center overflow-hidden mb-lg-0" style="height: 100%;">
                            <div class="card-img" style="height: 100%;">
                                <img src="{{url('/assets/images/product/deprima.jpeg')}}" alt="img" class="cover-image"
                                    style="height: 100%; width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="text-justify">
                        <h2 class="mb-4 mt-5">Sekilas Tentang Primaland</h2>
                        <h4 class="leading-normal">PRIMALAND merupakan Perusahaan yang bergerak di Bidang Developer,
                            Konsultan, dan Desain, yang dirintis pertama kali sejak tahun 2008</h4>
                        <p class="leading-normal">Pada Tahun 2016 PRIMALAND bertranformasi menjadi Developer Properti
                            Syariah Pertama dan Terbesar di Malang yang fokus membangun Hunian Islami dengan system
                            pembayaran Syariah. <br> Adapun beberapa Proyek yang telah terbangun dan dikembangkan antara
                            lain De Prima Tunggulwulung, Rumah Kost Watu Gong, Myrra Residence, Adyna Residence, Azzahra
                            Residence, Azzahra Townhouse, Rumah Kos Salvia Merjosari, Hunian Islami berkonsep Jepang
                            Annira Residence, dan Hunian Islami di Bondowoso De Prima Bondowoso Tahun 2020 , dengan
                            wajah baru, semangat baru dan harapan baru, PRIMALAND bertekad menjadi Perusahaan yang
                            berkontribusi nyata dalam melahirkan Pemimpin Umat dan Generasi Emas melalui bisnis properti
                            Syariah serta membangun Hunian Islami di seluruh Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    <section class="sptb bg-patterns" id="special">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Penawaran Spesial</h2>
            </div>
            <div class="row justify-content-center">
                <!-- Wrapper for carousel items -->

                @if (sizeof($products) == 0)
                <h5 class="text-center mt-8">Belum ada penawaran spesial</h1>
                    <h5 class="text-center mb-8">Kembali lagi nanti ya :)</h1>
                        @endif

                        @foreach ($products as $product)
                        @if ($product->show_status == '1')
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="card mb-0">
                                    <div class="item-card4-imgs">
                                        <a href="col-left.html"></a>
                                        <div style="width: 100%; height:100%; object-fit:cover">
                                            <img src="{{url($product->photo)}}" alt="img" class="cover-image">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card4-desc">
                                            <div class="item-card4-text">
                                                <a href="" class="text-dark">
                                                    <h4 class="">{{$product->name}}</h4>
                                                </a>
                                                <p class=""><i class="icon icon-location-pin text-muted mr-1"></i>
                                                    {{$product->address}} </p>
                                            </div>
                                            <ul class="item-cards7-ic mb-0">
                                                <li><a href="#"><i class="fa fa-arrows-alt text-muted mr-1"></i>
                                                        {{$product->type}} Luas</a></li>
                                                <li><a href="#" class="icons"><i class="fa fa-bed text-muted mr-1"></i>
                                                        {{$product->bedroom}} Kamar Tidur</a></li>
                                                <li><a href="#" class="icons"><i class="fa fa-car text-muted mr-1"></i>
                                                        {{$product->ac}} AC</a></li>
                                                <li><a href="#" class="icons"><i class="fa fa-bath text-muted mr-1"></i>
                                                        {{$product->bathroom}} Kamar Mandi</a></li>
                                            </ul>
                                            <h5 class="font-weight-bold mb-0">Rp.
                                                {{number_format($product->price,0,',','.')}} <span
                                                    class="fs-12  font-weight-normal">Per Kamar</span></h5>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex mb-0">
                                            <a href="/product/{{$product->id}}" class="btn btn-info">Tertarik?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    <!-- <section class="sptb bg-putih" id="product">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Produk Lainnya</h2>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">

                @foreach ($products as $product)
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-purple">Di Jual</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{url($product->photo)}}" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">{{$product->unit}}</a>
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="/product/{{$product->id}}" class="text-dark">
                                        <h4 class="">{{$product->name}}</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted mr-1"></i> {{$product->address}}</p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="#"><i class="fa fa-arrows-alt text-muted mr-1"></i> {{$product->type}} Luas</a></li>
                                    <li><a href="#" class="icons"><i class="fa fa-bed text-muted mr-1"></i> {{$product->bedroom}} Kamar Tidur</a></li>
                                    <li><a href="#" class="icons"><i class="fa fa-car text-muted mr-1"></i> {{$product->ac}} AC</a></li>
                                    <li><a href="#" class="icons"><i class="fa fa-bath text-muted mr-1"></i> {{$product->bathroom}} Kamar Mandi</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">Rp. {{number_format($product->price,0,',','.')}}</h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event mr-2 mt-1"></i>{{$product->created_at}} </span>
                                <div class="ml-auto">
                                    <a href="#" class="" data-toggle="tooltip" data-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section> -->
    <!--/Section-->

    <!--Footer Section-->
    <section>
        <footer class="bg-dark-purple text-white">
            <div class="footer-main">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <h5>Disclaimer</h5>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
                            <p>Portal ini merupakan alat bantu / tools pemasaran / penjualan obyek real estate /
                                perumahan untuk mempermudah para marketing untuk melakukan pemasaran property via online
                                . Dan bukan portal penggalangan dana.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark-purple text-white p-0">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
                            Copyright © 2020 Investasi Prima. Support by <a href="https://primaitech.com"
                                class="fs-14">PrimaITech</a> All rights reserved.
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

<!--Counters -->
<script src="{{url('/assets/plugins/counters/counterup.min.js')}}" defer></script>
<script src="{{url('/assets/plugins/counters/waypoints.min.js')}}" defer></script>
<script src="{{url('/assets/plugins/counters/numeric-counter.js')}}" defer></script>

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
<script src="{{url('/assets/js/sticky.js')}}" defer></script>

<!-- Custom scroll bar Js-->
<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

<!--Showmore Js-->
<script src="{{url('/assets/js/jquery.showmore.js')}}" defer></script>
<script src="{{url('/assets/js/showmore.js')}}" defer></script>

<!-- Swipe Js-->
<script src="{{url('/assets/js/swipe.js')}}" defer></script>

<!-- Scripts Js-->
<script src="{{url('/assets/js/owl-carousel.js')}}" defer></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/custom.js')}}" defer></script>