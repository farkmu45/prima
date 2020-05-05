@extends('layouts.app')
@section('head')
        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Verify your email address</title>
        <link href="{{url('/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />
		<!-- Dashboard css -->
		<link href="{{url('/assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{url('/assets/css/admin-custom.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="container" style="margin-top: 60px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
