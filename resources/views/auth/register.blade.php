@extends('layouts.app')
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

		<!-- Sidemenu Css -->
		<link href="{{url('/assets/plugins/toggle-sidebar/sidemenu.css')}}" rel="stylesheet" />

		<!-- Dashboard css -->
		<link href="{{url('/assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{url('/assets/css/admin-custom.css')}}" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="{{url('/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

		<!---Font icons-->
		<link href="{{url('/assets/css/icons.css')}}" rel="stylesheet"/>
		<link rel="stylesheet" href="{{url('/assets/fonts/fonts/font-awesome.min.css')}}">
@section('content')
    @livewire('register')
@endsection