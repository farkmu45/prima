<div class="page">
    <div class="page-main">
        <!--App-Header-->
        <div class="app-header1 header py-1 d-flex">
            <div class="container-fluid">
                <div class="d-flex">
                    <a class="header-brand" href="index.html">
                        <img src="../assets/images/brand/logo.png" class="header-brand-img" alt="Reallist logo">
                    </a>
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                    <div class="header-navicon">
                        <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>

                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon full-screen-link">
                                <i class="fe fe-maximize-2" id="fullscreen-button"></i>
                            </a>
                        </div>
                        <div class="dropdown ">
                            <a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
                                <img src="../assets/images/faces/male/25.jpg" alt="profile-img" class="avatar avatar-md brround">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                <a class="dropdown-item" href="profile.html">
                                    <i class="dropdown-icon icon icon-user"></i> My Profile
                                </a>
                                <a class="dropdown-item" href="emailservices.html">
                                    <i class="dropdown-icon icon icon-speech"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="editprofile.html">
                                    <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                </a>
                                <a class="dropdown-item" href="login.html">
                                    <i class="dropdown-icon icon icon-power"></i> Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/App-Header-->

        @include('layouts.sidebar')

        <!--App-Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">

                <!-- Page-Header-->
                <div class="page-header">
                    <h4 class="page-title">Agent</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Agent</li>
                        <li class="breadcrumb-item active" aria-current="page">Agent List</li>
                    </ol>
                </div>
                <!-- /Page-Header-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-b-20">
                            <div class="card-header">
                                <h3 class="card-title">Form Add Product</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data" action="/admin/products">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name" name="name" placeholder="Product Name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="price">Price</label>
                                                <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model="price" name="price" placeholder="Product Price">
                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4" class="col-form-label">Type</label>
                                            <input type="text" class="form-control @error('type') is-invalid @enderror" wire:model="type" name="type" placeholder="Product Type">
                                            @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">AC</label>
                                            <input type="number" class="form-control @error('ac') is-invalid @enderror" wire:model="ac" name="ac" placeholder="Product Ac">
                                            @error('ac')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Bedroom</label>
                                            <input type="number" class="form-control @error('bedroom') is-invalid @enderror" wire:model="bedroom" name="bedroom" placeholder="Product Bedroom">
                                            @error('bedroom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Bathroom</label>
                                            <input type="number" class="form-control @error('bathroom') is-invalid @enderror" wire:model="bathroom" name="bathroom" placeholder="Product Bathroom">
                                            @error('bathroom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Room Video</label>
                                            <input type="text" class="form-control @error('room_video') is-invalid @enderror" wire:model="room_video" name="room_video" placeholder="Product Bedroom">
                                            @error('room_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Survey Video</label>
                                            <input type="text" class="form-control @error('survey_video') is-invalid @enderror" wire:model="survey_video" name="survey_video" placeholder="Product Bathroom">
                                            @error('survey_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Photo</label>
                                                <input type="file" class="dropify @error('photo') is-invalid @enderror" name="photo" data-height="180" />
                                                @error('photo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Front View</label>
                                                <input type="file" class="dropify @error('front_view') is-invalid @enderror" name="front_view" data-height="180" />
                                                @error('front_view')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">First Floor</label>
                                                <input type="file" class="dropify @error('first_floor') is-invalid @enderror" name="first_floor" data-height="180" />
                                                @error('first_floor')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Second Floor</label>
                                                <input type="file" class="dropify @error('second_floor') is-invalid @enderror" name="second_floor" data-height="180" />
                                                @error('second_floor')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" name="description" rows="4" placeholder="Product Description"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary ">Add Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2019 <a href="#">Reallist</a>. Designed by <a href="#">Spruko</a> All
                        rights
                        reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- / Footer-->

    </div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>
<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>


				<!-- Bootstrap js -->
				<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
				<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>

				<!--JQuery Sparkline Js-->
				<script src="{{url('/assets/js/vendors/jquery.sparkline.min.js')}}" defer></script>

				<!-- Circle Progress Js-->
				<script src="{{url('/assets/js/vendors/circle-progress.min.js')}}" defer></script>

				<script src="{{url('/assets/plugins/datatable/jquery.dataTables.min.js')}}" defer></script>
				<script src="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}" defer></script>
				<script src="{{url('/assets/js/datatable.js')}}" defer></script>
				<!-- Star Rating Js-->
				<script src="{{url('/assets/plugins/rating/jquery.rating-stars.js')}}" defer></script>

				<!--Counters -->
				<script src="{{url('/assets/plugins/counters/counterup.min.js')}}" defer></script>
				<script src="{{url('/assets/plugins/counters/waypoints.min.js')}}" defer></script>

				<!-- Fullside-menu Js-->
				<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}" defer></script>

				<!-- CHARTJS CHART -->
				<script src="{{url('/assets/plugins/chart/Chart.bundle.js')}}" defer></script>
				<script src="{{url('/assets/plugins/chart/utils.js')}}" defer></script>

				<!-- Custom scroll bar Js-->
				<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}" defer></script>

				<!-- ECharts Plugin -->
				<script src="{{url('/assets/plugins/echarts/echarts.js')}}" defer></script>
				<script src="{{url('/assets/plugins/echarts/echarts.js')}}" defer></script>
				<script src="{{url('/assets/js/index1.js')}}" defer></script>

				<!-- Custom Js-->
				<script src="{{url('/assets/js/admin-custom.js')}}" defer></script>