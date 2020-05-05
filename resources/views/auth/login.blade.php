@extends('layouts.app')

@section('head')
<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- Title -->
	<title>Login</title>

	<!-- Bootstrap Css -->
	<link href="{{url('/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<!-- <link href="../assets/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" /> -->


	<!-- Dashboard css -->
	<link href="{{url('/assets/css/style.css')}}" rel="stylesheet" />
	<!-- <link href="../assets/css/admin-custom.css" rel="stylesheet" /> -->

	<!---Font icons-->
	<link href="{{url('/assets/css/icons.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{url('/assets/fonts/fonts/font-awesome.min.css')}}">
@endsection

@section('content')
    <div class="page construction-image"">
        <div class="page-content z-index-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                        <div class="card mb-0">
                            <div class="card-header">
                                <h3 class="card-title">Login to your account</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label text-dark" for="email">Email</label>
                                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@mail.com">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-dark" for="password">Password</label>
                                        <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" id="password" placeholder="Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <a href="{{ route('password.request') }}" class="float-right small text-dark mt-1">Forgot
                                                password</a>
                                            <input name="remember" type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label text-dark" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</span>
                                        </label>
                                    </div>
                                    <div class="form-footer mt-2">
                                        <!-- <a href="index.html" class="btn btn-primary btn-block">Login</a> -->
                                        <button class="btn btn-primary btn-block">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

	<!-- Bootstrap js -->
	<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
	<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>

	<!-- Custom Js-->
	<script src="{{url('/assets/js/admin-custom.js')}}"></script>
@endsection
