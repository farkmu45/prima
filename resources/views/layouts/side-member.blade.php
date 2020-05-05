<div class="col-xl-3 col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">My Dashboard</h3>
        </div>
        <div class="card-body text-center item-user border-bottom">
            <div class="profile-pic">
                <div class="profile-pic-img">
                    <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
                <img src="{{url(auth()->user()->photo !== null ? auth()->user()->photo : '' )}}" class="brround" style="width: 100%; height: 100%; object-fit: cover">
                </div>
                <a href="#" class="text-dark">
                    <h4 class="mt-3 mb-0 font-weight-semibold">{{auth()->user()->name}}</h4>
                </a>
            </div>
        </div>
        <div class="item1-links  mb-0">
            <a href="/member/dashboard" class="d-flex  border-bottom">
                <span class="icon1 mr-3"><i class="icon icon-speedometer"></i></span> Dashboard
            </a>
            <a href="/member/order" class="d-flex  border-bottom">
                <span class="icon1 mr-3"><i class="icon icon-basket"></i></span> Orders
            </a>
            <a href="/member/profile" class="d-flex border-bottom">
                <span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
            </a>
            <a href="#" class="d-flex">
                <span class="icon1 mr-3"><i class="icon icon-power"></i></span> Logout
            </a>
        </div>
    </div>
</div>