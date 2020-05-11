  <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo"><img src="{{url('/assets/images/brand/logo.png')}}" width="120" alt="" /></span>
                <a href="tel:08113766666" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>
        </div>
  
  <div class="horizontal-main bg-dark-transparent clearfix">
      <div class="horizontal-mainwrapper container clearfix">
          <div class="desktoplogo">
              <a href="/"><img src="{{url('/assets/images/brand/logo1.png')}}" alt=""></a>
          </div>
          <div class="desktoplogo-1">
              <a href="/"><img src="{{url('/assets/images/brand/logo1.png')}}" alt=""></a>
          </div>
          <nav class="horizontalMenu clearfix d-md-flex">
              <ul class="horizontalMenu-list">
                  <li aria-haspopup="true"><a href="#home">Beranda</a></li>
                  <li aria-haspopup="true"><a href="#why">Kenapa Investasi</a></li>
                  <li aria-haspopup="true"><a href="#invest">Investasi Online</a></li>
                  <li aria-haspopup="true"><a href="#about">Profil</a></li>
                  <li aria-haspopup="true"><a href="#special">Penawaran Spesial</a></li>
                  <li aria-haspopup="true"><a href="#product">Produk</a></li>

                  @auth
                  @if (auth()->user()->role_id == 1)    
                  <li aria-haspopup="true">
                      <span><a class="btn btn-secondary " href="/admin/dashboard">Dashboard</a></span>
                  </li>

                  <li aria-haspopup="true">
                      <span><button class="btn btn-danger ml-2">Logout</button></span>
                  </li>
                  @else    
                  <li aria-haspopup="true">
                      <span><a class="btn btn-secondary " href="/member/dashboard">Dashboard</a></span>
                  </li>
                  <li aria-haspopup="true">
                      <span><button class="btn btn-danger ml-2" onclick="document.getElementById('logoutform').submit()">Logout</button></span>
                  </li>
                  @endif    
                  @endauth

                  @guest    
                  <li aria-haspopup="true">

                    @if (Cookie::get('referral'))
                        <span><a class="btn btn-secondary " href="/register">Register</a></span>
                    @else
                        <span><a class="btn btn-secondary " href="/login">Login | Register</a></span>
                    @endif
                  </li>
                  @endguest
              </ul>
          </nav>
          <!--Nav-->
      </div>
  </div>

  <form id="logoutform" hidden action="/logout" method="post">
    @csrf
 </form>