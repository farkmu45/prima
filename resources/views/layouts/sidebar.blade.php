<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar doc-sidebar">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div>
							<img src="../assets/images/faces/male/25.jpg" alt="user-img"
								class="avatar avatar-lg brround">
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
						<a class="side-menu__item" href="/admin/dashboard"><i class="side-menu__icon fa fa-pie-chart"></i>Dashboard</a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Agent</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="/admin/agents">Agent List</a></li>
							<li><a class="slide-item" href="/admin/agents/add">Agent Order</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Member</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="/admin/members">Member List</a></li>
							<li><a class="slide-item" href="/admin/members/orders">Member Order</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-tag"></i><span class="side-menu__label">Product</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="/admin/products">Product List</a></li>
							<li><a class="slide-item" href="/admin/products/add">Add Product</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-money"></i><span class="side-menu__label">Payment</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="/admin/payments">Payment List</a></li>
							<li><a class="slide-item" href="/admin/payments/add">Add Payment</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i
								class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Referal</span><i
								class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="/admin/referals">Referal List</a></li>
						</ul>
					</li>
				</ul>
			</aside>