@extends('layouts.app')
<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<title>Register</title>

		<!-- Bootstrap Css -->
		<link href="{{url('/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />


		<!-- Dashboard css -->
		<link href="{{url('/assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{url('/assets/css/admin-custom.css')}}" rel="stylesheet" />
@section('content')
			<livewire:register>
@endsection