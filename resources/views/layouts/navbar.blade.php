  <div class="horizontal-main bg-dark-transparent clearfix">
      <div class="horizontal-mainwrapper container clearfix">
          <div class="desktoplogo">
              <a href="index.html"><img src="{{url('/assets/images/brand/logo1.png')}}" alt=""></a>
          </div>
          <div class="desktoplogo-1">
              <a href="index.html"><img src="{{url('/assets/images/brand/logo1.png')}}" alt=""></a>
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
                  <li aria-haspopup="true">
                      <span><a class="btn btn-secondary " href="/member/dashboard">Dashboard</a></span>
                  </li>
                  @endauth

                  @guest    
                  <li aria-haspopup="true">
                      <span><a class="btn btn-secondary " href="/login">Login | Register</a></span>
                  </li>
                  @endguest
              </ul>
          </nav>
          <!--Nav-->
      </div>
  </div>