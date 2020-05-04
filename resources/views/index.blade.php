@extends('layouts.app')

@section('head')
	<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html template, real estate websites, real estate html template, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website"/>

		<!-- Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template</title>

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