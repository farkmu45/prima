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
                    <form action="/member/profile" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <div class="card mb-0">
                            <div class="card-header">
                                <h3 class="card-title">Ubah Profil</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{auth()->user()->name}}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">NIK</label>
                                            <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" value="{{auth()->user()->id_number}}">
                                            @error('id_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{auth()->user()->place_of_birth}}">
                                            @error('place_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{auth()->user()->date_of_birth}}">
                                            @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Telepon</label>
                                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{auth()->user()->phone_number}}">
                                            @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{auth()->user()->address}}">
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Desa / Kelurahan</label>
                                            <input type="text" class="form-control @error('village') is-invalid @enderror" name="village" value="{{auth()->user()->village}}">
                                            @error('village')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Kecamatan</label>
                                            <input type="text" class="form-control @error('sub_district') is-invalid @enderror" name="sub_district" value="{{auth()->user()->sub_district}}">
                                            @error('sub_district')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Kota / Kabupaten</label>
                                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{auth()->user()->city}}">
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Provinsi</label>
                                            <input type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{auth()->user()->province}}">
                                            @error('province')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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
                                            <input type="text" class="form-control @error('bank_name') is-invalid @enderror" name="bank_name" value="{{auth()->user()->bank_name}}">
                                            @error('bank_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">No Rekening</label>
                                            <input type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{auth()->user()->account_number}}">
                                            @error('account_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Nama Pemilik Rekening</label>
                                            <input type="text" class="form-control @error('account_name') is-invalid @enderror" name="account_name" value="{{auth()->user()->account_name}}">
                                            @error('account_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h3 class="card-title">Foto Profil</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group col-lg-4 col-sm-12">
                                            @if (auth()->user()->photo)
                                            <div style="width: 60px; height: 60px">
                                                <img src="{{url(auth()->user()->photo)}}" alt="" srcset="" style="width: 100%; height: 100%; object-fit: cover">
                                            </div>
                                            @endif

                                            <label class="form-label" for="exampleInputEmail1">Foto</label>
                                            <input type="file" name="photo" value="{{auth()->user()->photo}}" />
                                            @error('photo')
                                            <p style="color: red">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group col-lg-4 col-sm-12">
                                            @if (auth()->user()->id_photo)
                                            <div style="width: 60px; height: 60px">
                                                <img src="{{url(auth()->user()->id_photo)}}" alt="" srcset="" style="width: 100%; height: 100%; object-fit: cover">
                                            </div>
                                            @endif

                                            <label class="form-label" for="exampleInputEmail1">Foto KTP</label>
                                            <input type="file" name="id_photo" />
                                            @error('photo')
                                            <p style="color: red">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Ubah Profil</button>
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

    <!-- Bootstrap js -->
    <script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
    <script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>

    <!--Horizontal Menu-->
    <script src="{{url('/assets/plugins/horizontal-menu/horizontal.js')}}" defer></script>

    <!--Select2 js -->
    <script src="{{url('/assets/plugins/select2/select2.full.min.js')}}" defer></script>
    <script src="{{url('/assets/js/select2.js')}}" defer></script>
</div>