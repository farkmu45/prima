@extends('layouts.app')

@section('head')
    <meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- Title -->
	<title>Admin</title>
	<link rel="stylesheet" href="{{url('/assets/fonts/fonts/font-awesome.min.css')}}">

	<!-- Bootstrap Css -->
	<link href="{{url('/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

	<link href="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{url('/assets/plugins/datatable/jquery.dataTables.min.css')}}" rel="stylesheet" />

	<!-- Dashboard Css -->
	<link href="{{url('/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{url('/assets/css/admin-custom.css')}}" rel="stylesheet" />
    
    <link href="{{url('assets/plugins/fileuploads/css/dropify.css')}}" rel="stylesheet" type="text/css" />

	<!-- Sidemenu Css -->
	<link href="{{url('/assets/plugins/toggle-sidebar/sidemenu.css')}}" rel="stylesheet" />

	<!-- Custom scroll bar css-->
	<link href="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

	<!---Font icons-->
	<link href="{{url('/assets/css/icons.css')}}" rel="stylesheet" />
	<link href="{{url('/assets/plugins/iconfonts/icons.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{url('/assets/fonts/fonts/font-awesome.min.css')}}">
@endsection

@section('content')
    <livewire:add-product>
@endsection