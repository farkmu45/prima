@extends('layouts.app')
@section('head')
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Verify your phone number</title>
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
        <div class="card-header">{{ __('Verify Your Phone Number') }}</div>

        <div class="card-body">

          @if (Session::has('messages'))
          @foreach(session('messages')->all(':message') as $message)
            <div class="alert alert-success">{{ $message }}</div>
          @endforeach
          @endif

          @if ($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all(':message') as $message)
            <p>{{ $message }}</p>
            @endforeach
          </div>
          @endif

          {{ __('Before proceeding, please verify your phone number.') }}
          <form class="mb-3 mt-3 d-block" action="/verifyphone" accept-charset="UTF-8" method="post">
            <div class="form-group">
              <input class="form-control" name="code" id="code" type="number" required>
            </div>
            <button class="btn btn-primary" name="button" type="submit">Verify</button>
            @csrf
          </form>
          {{ __('If you did not receive the code') }},
          <form class="d-inline" method="POST" action="/resendphone">
            @csrf
            <button type="submit"
              class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>.
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection