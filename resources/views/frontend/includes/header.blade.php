<header id="header" class="header style2">
	<div class="main-header">
		<div class="container">
			<div class="main-menu-wapper">
				<div class="row">
					<div class="col-sm-12 col-md-3 logo-wapper">
						<div class="logo">
							<a href="#"><img src="{{asset('butik/images/logos/1.png')}}" alt=""></a>
						</div>
					</div>
					<div class="col-sm-12 col-md-9 menu-wapper">
						<div class="box-control">
							<form  class="box-search show-icon">
								<span class="icon"><span class="pe-7s-search"></span></span>
								<div class="inner">
									<input type="text" class="search" placeholder="Search here...">
									<button class="button-search"><span class="pe-7s-search"></span></button>
								</div>
							</form>
							<div class="mini-cart">
								<a class="cart-link" href="#"><span class="pe-7s-cart"></span> <span class="count">3</span></a>
								<div class="show-shopping-cart">
									<h3 class="title">YOU HAVE <span class="text-primary">(3 ITEMS)</span> IN YOUR CART</h3>
									<ul class="list-product">
										<li>
										<div class="thumb">
											<img src="{{asset('butik/images/products/1.png')}}" alt="">
										</div>
										<div class="info">
											<h4 class="product-name"><a href="#">LONDON STAR SWEATSHIRT</a></h4>
											<span class="price">1x£375.00</span>
											<a class="remove-item" href="#"><i class="fa fa-close"></i></a>
										</div>
										</li>
										<li>
										<div class="thumb">
											<img src="{{asset('butik/images/products/1.png')}}" alt="">
										</div>
										<div class="info">
											<h4 class="product-name"><a href="#">LONDON STAR SWEATSHIRT</a></h4>
											<span class="price">1x£375.00</span>
											<a class="remove-item" href="#"><i class="fa fa-close"></i></a>
										</div>
										</li>
									</ul>
									<div class="sub-total">
										Subtotal:£255.00
									</div>
									<div class="group-button">
										<a href="#" class="button">Shopping Cart</a>
										<a href="#" class="check-out button">CheckOut</a>
									</div>
	    						</div>
							</div>
							<div class="box-settings">
	                            <span class="icon pe-7s-config"></span>
                <div class="settings-wrapper ">
                    <div class="setting-content">
                        <div class="select-language">
                            <div class="language-title">Select language</div>
                            <div class="language-topbar">                                                
                                <div class="lang-list">
                                    <ul class="clearfix">
                                        <li class="active"><a href="#"> <img src="{{asset('butik/images/flag1.png')}}" alt=""> </a></li>
                                        <li><a href="#"> <img src="{{asset('butik/images/flag2.png')}}" alt=""></a></li>
                                        <li><a href="#"> <img src="{{asset('butik/images/flag3.png')}}" alt=""></a></li>
                                        <li><a href="#"> <img src="{{asset('butik/images/flag4.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="select-currency">
                            <div class="currency-title">Select currency</div>
                            <div class="currency-topbar">                                                
                                <div class="currency-list">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="sym"><i class="fa fa-usd"></i></span></a></li>
                                        <li class="active"><a href="#"><span class="sym"><i class="fa fa-eur"></i></span></a></li>
                                        <li><a href="#"><span class="sym"><i class="fa fa-gbp"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="setting-option">
                            <ul>
                                <li><a href="#"><i class="icon-heart icons"></i><span>Wishlist</span></a></li>
                                {{-- <li><a href="#"><i class="icon-user icons"></i><span> MyAccount</span></a></li>                                                --}}
                                <li><a href="#"><i class="icon-note icons"></i><span>Checkout</span></a></li>
								<li><a href="#"><i class="icon-handbag icons"></i><span>Compare</span></a></li>
								<li><a href="{{route('login')}}"><i class="icon-lock-open icons"></i><span>Login</span></a></li>
                            </ul>
                        </div>
                  </div>
              </div>
							</div>
						</div>
						<ul class="boutique-nav main-menu clone-main-menu">                                      
							<li class="active menu-item-has-children item-megamenu">
								<a href="{{route('welcome')}}">Home</a>
							</li>
	                        <li class="menu-item-has-children item-megamenu">
	                            <a href="#">Shop</a>
	                            <div style="width:820px; background-image:url('butik/images/bg-megamenu.png'); " class="sub-menu megamenu megamenu-bg" >
	                                <div class="row">
	                                    <div class="col-sm-3">
	                                        <div class="mega-custom-menu">
	                                            <h2 class="title">CATEGORIES</h2>
	                                            <ul>
	                                                <li><a href="category-left-sidebar.html">Left sidebar</a></li>
	                                                <li><a href="category-right-sidebar.html">Right sidebar</a></li><li><a href="category-list.html">Category list</a></li>
	                                                <li><a href="category-2columns.html">2 columns</a></li>
	                                                <li><a href="category-3columns.html">3 columns</a></li>
	                                                <li><a href="category-4columns.html">4 columns</a></li>
	                                                <li><a href="category-6columns.html">6 columns</a></li>
	                                                <li><a href="category2-leftsidebar.html">Categorie Style 2</a></li>
	                                                <li><a href="category3-leftsidebar.html">Categorie Style 3</a></li>
	                                                <li><a href="category4-leftsidebar.html">Categorie Style 4</a></li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                    <div class="col-sm-3">
	                                        <div class="mega-custom-menu">
	                                            <h2 class="title">PRODUCT</h2>
	                                            <ul>
	                                                <li><a href="product-1.html">Product Simple</a></li>
	                                                <li><a href="product-2.html">Out of Stock</a></li>
	                                                <li><a href="product-3.html">Product Fullwidth</a></li>
	                                                <li><a href="product-4.html">Product Left Sidebar</a></li>
	                                                <li><a href="product-5.html">External/Affiliate product</a></li>
	                                                <li><a href="product-6.html">Grouped product</a></li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </li>
							<li class="menu-item-has-children">
								<a href="blogs.html">BLOG</a>
								<ul class="sub-menu">
									<li><a href="blogs.html">Blog List</a></li>
									<li><a href="blogpost.html">Blog Single</a></li>
								</ul>
							</li>
{{-- 
							<li class="menu-item-has-children item-megamenu">
								<a href="{{route('login')}}">Login / Register</a>
							</li> --}}

							@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                    
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										My Account <span class="caret"></span>
									</a>

									<div class="dropdown-menu dropdown-menu-right pd-3" style="padding: 10px;" aria-labelledby="navbarDropdown">
										<a href="" class="dropdown-item">My Account</a>
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest

						</ul>
						<span class="mobile-navigation"><i class="fa fa-bars"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

