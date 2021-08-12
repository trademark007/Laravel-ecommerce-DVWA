@extends('frontend.layouts.app')

@section('content')



<div class="container">
	<div class="row left-slidebar">
		<div class="col-sm-8 col-md-9 main-content">
			<!-- Home slide -->
			<div class="home-slide7 owl-carousel nav-style4" data-items="1" data-nav="true" data-dots="false" data-loop="true" data-autoplay="true">
				<img src="{{asset('butik/images/slides/15.jpg')}}" alt="">
				<img src="{{asset('butik/images/slides/16.jpg')}}" alt="">
				<img src="{{asset('butik/images/slides/17.jpg')}}" alt="">
			</div>
			<!-- ./Home slide -->
			<div class="block-featured-product margin-top-35">
				<div class="section-title style3 margin-bottom-35">
					<h3>FEATURED ITEMS</h3>
				</div>
				<ul class="tab-list owl-carousel nav-style5" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
    				<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/1.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/2.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
					<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/2.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/3.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
					<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/3.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/4.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
					<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/4.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/5.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
    			</ul>
			</div>
			<div class="margin-top-40">
				<a class="banner-opacity" href="#"><img src="{{asset('butik/images/b/18.jpg')}}" alt=""></a>
			</div>
			<div class="block-featured-product margin-top-30">
				<div class="section-title style3 ">
					<h3>New Arrivals</h3>
				</div>
				<ul class="tab-list owl-carousel nav-style5" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
    				<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/1.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/2.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
					<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/2.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/3.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
					<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/3.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/4.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
					<li class="product-item">
						<div class="product-inner">
							<div class="product-thumb has-back-image">
								<a href="#"><img src="{{asset('butik/images/products/4.jpg')}}" alt=""></a>
								<a class="back-image" href="#"><img src="{{asset('butik/images/products/5.jpg')}}" alt=""></a>
								<div class="gorup-button">
									<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
									<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
									<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
								<span class="price">
									<ins>£85.00</ins>
									<del>£95.00</del>
								</span>
								<a href="#" class="button">ADD TO CART</a>
							</div>
						</div>
					</li>
    			</ul>
			</div>
			<div class="text-border margin-top-40 margin-bottom-40">
				<p>FREE UK DELIVERY + RETURN OVER £85.00 (EXCLUDING HOMEWARE)| FREE UK COLLECT FROM STORE</p>
			</div>
		</div>
		<div class="col-sm-4 col-md-3">
			<div class="block-category-carousel">
				<h3 class="title">CATEGORIES</h3>
				<span class="sub-title">Find all items you want by select our featured categories</span>
				<div class="block-inner owl-carousel" data-nav="false" data-dots="false" data-items="1" data-loop="false" data-autoplay="true">
					<ul class="list-cat">
						<li><a href="#"><img src="{{asset('butik/images/icons/4.png')}}" alt="">Clothing</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/5.png')}}" alt="">Sneakers</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/6.png')}}" alt="">Accessories</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/7.png')}}" alt="">Handbags</a></li>
					</ul>
					<ul class="list-cat">
						<li><a href="#"><img src="{{asset('butik/images/icons/4.png')}}" alt="">Clothing</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/5.png')}}" alt="">Sneakers</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/6.png')}}" alt="">Accessories</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/7.png')}}" alt="">Handbags</a></li>
					</ul>
					<ul class="list-cat">
						<li><a href="#"><img src="{{asset('butik/images/icons/4.png')}}" alt="">Clothing</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/5.png')}}" alt="">Sneakers</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/6.png')}}" alt="">Accessories</a></li>
						<li><a href="#"><img src="{{asset('butik/images/icons/7.png')}}" alt="">Handbags</a></li>
					</ul>
				</div>
			</div>
			<div class="margin-top-30">
				<div class="newsletter style2">
                    <div class="section-title text-center"><h3>NEWSLETTER</h3></div>
                    <i class="newsletter-info">Sign up for Our Newsletter &amp; Promotions</i>
                    <form class="form-newsletter">
                      <input type="text" name="newsletter" placeholder="Your email..." value="">
                      <span><button class="newsletter-submit" type="submit">SIGNUP</button></span>
                    </form>
                </div>
			</div>
			<div class="margin-top-30">
				<a class="banner-opacity" href="#"><img src="{{asset('butik/images/b/17.jpg')}}" alt=""></a>
			</div>
			<span class="line margin-top-30"></span>
			<div class="margin-top-30">
				<div class="section-title margin-bottom-30">
					<h3>Our BLog</h3>
					<span class="sub-title">Find more our news & Promotions </span>
				</div>
				<div class="lastest-blog style2 owl-carousel nav-style5" data-items="1" data-nav="true" data-dots="false" data-loop="true" data-margin="30">
					<div class="item-blog">
						<div class="right">
							<a class="banner-opacity" href="#"><img src="{{asset('butik/images/blogs/1.jpg')}}" alt=""></a>
							<div class="blog-date">
								<span class="day">7</span>
								<span class="group">
									<span class="month">/SEP</span>
									<span class="year">2015</span>
								</span>
							</div>
							<div class="left">
								<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
								<div class="meta">
									<span class="author">John Doe</span>
									<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item-blog">
						<div class="right">
							<a class="banner-opacity" href="#"><img src="{{asset('butik/images/blogs/2.jpg')}}" alt=""></a>
							<div class="blog-date">
								<span class="day">7</span>
								<span class="group">
									<span class="month">/SEP</span>
									<span class="year">2015</span>
								</span>
							</div>
							<div class="left">
								<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
								<div class="meta">
									<span class="author">John Doe</span>
									<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="section-brand-slide margin-bottom-40">
		<div class="brands-slide owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false" data-loop="true" data-margin="60" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
			<a href="#"><img src="{{asset('butik/images/brands/brand1.png')}}" alt=""></a>
			<a href="#"><img src="{{asset('butik/images/brands/brand2.png')}}" alt=""></a>
			<a href="#"><img src="{{asset('butik/images/brands/brand3.png')}}" alt=""></a>
			<a href="#"><img src="{{asset('butik/images/brands/brand4.png')}}" alt=""></a>
			<a href="#"><img src="{{asset('butik/images/brands/brand5.png')}}" alt=""></a>
		</div>
	</div>
</div>

@endsection
@section('script')
<script src="{{asset('js/angular.min.js')}}"></script>
<script src="{{asset('js/backend-service.js')}}"></script>
<script>

</script>
@endsection