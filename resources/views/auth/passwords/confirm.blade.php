@extends('layouts.app')


@section('head')
        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Confirm password</title>
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
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body text-center">
                    {{ __('Please confirm your password before continuing.') }}

                    <form class="mt-6" method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row d-flex">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
