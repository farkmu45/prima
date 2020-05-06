@extends('layouts.app')

@section('head')
	<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Title -->
		<title>Investasi Prima</title>

		<!-- Bootstrap Css -->
		<link href="{{url('/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Style css -->
		<link href="{{url('/assets/css/style.css')}}" rel="stylesheet" />

		<!-- Font-awesome  Css -->
		<link href="{{url('/assets/css/icons.css')}}" rel="stylesheet"/>

		<!--Horizontal Menu-->
		<link href="{{url('/assets/plugins/horizontal-menu/horizontal.css')}}" rel="stylesheet" />

		<!--Select2 Plugin -->
		<link href="{{url('/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

		<!-- Cookie css -->
		<link href="{{url('/assets/plugins/cookie/cookie.css')}}" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="{{url('/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

		<!-- Color skin-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{url('/assets/skins/color-skins/color15.css')}}" />
@endsection
		
@section('content')
	<livewire:index>
@endsection