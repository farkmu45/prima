

<div class="app-header1 header py-1 d-flex">
    <div class="container-fluid">
        <div class="d-flex">
        <a class="header-brand" href="/admin/dashboard">
                <img src="{{url('assets/images/brand/logo.png')}}" class="header-brand-img">
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
                    <img src="{{url('assets/images/default.png')}}" alt="" class="avatar avatar-md brround">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                        <a class="dropdown-item" href="/admin/profile">
                            <i class="dropdown-icon icon icon-user"></i> My Profile
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="dropdown-item">
                                <i class="dropdown-icon icon icon-power"></i> Log out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>