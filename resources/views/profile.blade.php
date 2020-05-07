@extends('layouts.app')

@section('head')
    <!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="icon" href="{{url('/assets/images/brand/favicon.png')}}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/images/brand/favicon.png')}}" />
		<!-- Title -->
		<title>Investasi Prima - Profil</title>

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

		
		<!-- Custom scroll bar css-->
		<link href="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
		
		<link href="{{url('/assets/plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
		
		<!-- Color skin -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{url('/assets/skins/color-skins/color15.css')}}" />
@endsection


@section('content')
	<livewire:profile>
@endsection