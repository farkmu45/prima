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

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar doc-sidebar">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div>
                        <img src="../assets/images/faces/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
                        <a href="editprofile.html" class="profile-img">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="user-info">
                        <h2>{{auth()->user()->name}}</h2>
                        <span>{{auth()->user()->role->name}}</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item" href="#"><i class="side-menu__icon fa fa-pie-chart"></i>Dashboard</a>
                </li>
                <li class="slide">
                    <a class="side-menu__item active" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Agent</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="/admin/agents">Agent List</a></li>
                        <li><a class="slide-item" href="/admin/agents/add">Agent Order</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Member</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="admin-pricing.html">Member List</a></li>
                        <li><a class="slide-item" href="Ads.html">Member Order</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tag"></i><span class="side-menu__label">Product</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item active" href="Ads.html">Product List</a></li>
                        <li><a class="slide-item" href="admin-pricing.html">Add Product</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="#"><i class="side-menu__icon fa fa-cogs"></i>Product</a>
                </li>
            </ul>
        </aside>
        <!-- /Sidebar menu-->

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
                                <h3 class="card-title">Form row</h3>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">First Name</label>
                                                <input type="text" class="form-control" id="name1" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Last Name</label>
                                                <input type="text" class="form-control" id="name2" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail5" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="col-form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Address</label>
                                        <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="Address.."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Address 2</label>
                                        <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="Address2.."></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputCity" class="col-form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState" class="col-form-label">State</label>
                                            <select id="inputState" class="form-control">
                                                <option>Choose</option>
                                                <option>California</option>
                                                <option>Washington</option>
                                                <option>Texas</option>
                                                <option>Italy</option>
                                                <option>France</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip" class="col-form-label">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check pl-0">
                                            <div class="checkbox checkbox-secondary"><input id="checkbox1" type="checkbox">
                                                <label for="checkbox1"><span> I Agree !</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary ">Sign in</button>
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

<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}"></script>


<!-- Bootstrap js -->
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>

<!--JQuery Sparkline Js-->
<script src="{{url('/assets/js/vendors/jquery.sparkline.min.js')}}"></script>

<!-- Circle Progress Js-->
<script src="{{url('/assets/js/vendors/circle-progress.min.js')}}"></script>

<script src="{{url('/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('/assets/js/datatable.js')}}"></script>
<!-- Star Rating Js-->
<script src="{{url('/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

<!--Counters -->
<script src="{{url('/assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{url('/assets/plugins/counters/waypoints.min.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>

<!-- CHARTJS CHART -->
<script src="{{url('/assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{url('/assets/plugins/chart/utils.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{url('/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- ECharts Plugin -->
<script src="{{url('/assets/plugins/echarts/echarts.js')}}"></script>
<script src="{{url('/assets/plugins/echarts/echarts.js')}}"></script>
<script src="{{url('/assets/js/index1.js')}}"></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/admin-custom.js')}}"></script>