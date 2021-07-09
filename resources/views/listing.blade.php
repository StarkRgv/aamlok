<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>AAMLOK | LISTING</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/custom.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/theme-default.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>
</head>
<body>
@if (session()->has('success'))
    @component('components.notify-msg', ['class' => 'bg-success'])
      @slot('message')
        {{ session('success') }}
      @endslot
    @endcomponent
@endif
<div class="wrap">
	<header id="header" class="header-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="logo">
						<a href="{{ url('/') }}"><img src="images/home_1/logo.png" alt="" /></a>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12">
					<div class="top-search">
						{{-- <div class="search-cat">
							<a href="#" class="box-cat-toggle"></a>
							<div class="wrap-scrollbar" style="display: none;">
								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 200px; height: 200px;">
									<div class="scrollbar" style="overflow: hidden; width: 200px; height: 200px;">
										<ul>
											<li class="level-0"><a href="#">All Categories</a></li>
											<li class="level-1"><a href="#">Default Category</a></li>
											<li class="level-2"><a href="#">Beauty &amp; Perfumes</a></li>
											<li class="level-2"><a href="#">Collection</a></li>
											<li class="level-2"><a href="#">Hugpo Dinp</a></li>
											<li class="level-2"><a href="#">Hat &amp; Cavar</a></li>
											<li class="level-2"><a href="#">Danlien Polosa</a></li>
											<li class="level-2"><a href="#">Chemise SLimFit</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div> --}}
						<div class="search-form">
							<form action="{{ route('search') }}" method="get">
                                <input type="text" name="search_query" value="Search" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"  />
                                <input type="submit" value="" />
                            </form>
						</div>
					</div>
				</div>
			</div>
			<div class="top-nav">
				<div class="row">
					<div class="col-md-10 col-sm-12 col-xs-6">
						<nav class="main-nav">
							<ul class="list-inline">
								<li class="menu-item-has-children">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
								<li class="has-mega-menu">
									<a href="#">Filters</a>
									<ul class="sub-menu">
										<li>
											<div class="wrap-mega-menu">
												<div class="row">
                                                    @foreach ($categories as $cat)
													<div class="col-md-3 col-sm-3 col-xs-12">
                                                        <div class="mega-menu-slider-brand">
                                                            <h2>{{ $cat->category }}</h2>
															<div class="wrap-item">
                                                                <div class="item">
																	<div class="inner-brand">
                                                                        <ul>
                                                                            @foreach ($subCategory->where('category_id', $cat->id) as $subCat)
																			<li><a href="{{ route('listing', ['sub_category_id' => $subCat->id]) }}">{{ $subCat->sub_category }}</a></li>
                                                                            @endforeach
																		</ul>
																	</div>
																</div>
																{{-- <div class="item">
																	<div class="inner-brand">
                                                                        <a href="#"><img src="images/banner/logo-brand-01.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-03.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-02.png" alt=""/></a>
																	</div>
																</div>
																<div class="item">
                                                                    <div class="inner-brand">
                                                                        <a href="#"><img src="images/banner/logo-brand-02.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-03.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-01.png" alt=""/></a>
																	</div>
																</div> --}}
															</div>
															<div class="owl-direct-nav">
                                                                <a class="prev" href="#"><i class="fa fa-arrow-circle-left"></i></a>
																<a class="next" href="#"><i class="fa fa-arrow-circle-right"></i></a>
															</div>
														</div>
													</div>
                                                    @endforeach
												</div>
											</div>
										</li>
									</ul>
								</li>
                                <li class="has-mega-menu">
                                    <a href="{{ route('listing') }}">Listing</a>
                                </li>
						</nav>
						<!-- End Nav -->
					</div>
					<div class="col-md-2 col-sm-12 col-xs-6">
						<div class="header-info">
							<div class="box-account-lc box">
								<a href="#" class="link-user-top"><img src="images/home_1/icon-user.png" alt="" /></a>
								<div class="box-inner" style="width: auto">
									<ul class="links">
        								@guest
										<li class="first"><a href="{{ route('login') }}" class="link-user-top">Login</a></li>
										<li><a href="{{ route('register') }}" class="link-cart-top">Register </a></li>
										@endauth
        								@if(auth()->user())
										<li><a href="{{ route('home') }}" class="link-user-top">{{ auth()->user()->name }}</a></li>
										<li><a href="{{ route('logout') }}" class="link-user-top">Logout</a></li>
										@endauth
									</ul>
								</div>
							</div>
						</div>
						<!-- End Header Info -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	<div id="content">
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-left sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="inner-left">
							<div class="block block-layered-nav">
								<div class="block-title">
									<strong><span>Shop By</span></strong>
								</div>
								<dl id="narrow-by-list">
									<dt class="first">Category</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($categories as $cat)
											<li><a href="{{ route('listing', ['category_id' => $cat->id]) }}">{{ $cat->category }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4>
                                            @endforelse
										</ol>
									</dd>
									<dt>Price</dt>
									<dd class="block-price">
										<div class="price">
											{{-- <div class="range-wrap">
												<div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="slider-range">
													<div style="left: 0%; width: 100%;" class="ui-slider-range ui-widget-header"></div>
													<a style="left: 0%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a>
													<a style="left: 100%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a>
												</div>
											</div> --}}
											<form action="{{ route('search.price') }}" method="GET">
                                                <div class="text-box">
                                                        <div class="price-from">
                                                            <span>₹</span>
                                                            <input type="text" name="min" id="minPrice" class="priceTextBox pl" value="">
                                                        </div>
                                                        <div class="price-to">
                                                            <input type="text" name="max" id="maxPrice" class="priceTextBox pr" value="">
                                                        </div>
                                                        <button class="go" type="submit">Go</button>
                                                </div>
                                            </form>
										</div>
									</dd>
									<dt>Color</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($colors as $color)
											<li><a href="{{ route('listing', ['color_id' => $color->id]) }}">{{ $color->color }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4></li>
                                            @endforelse
										</ol>
									</dd>
									<dt>Size</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($sizes as $size)
											<li><a href="{{ route('listing', ['size_id' => $size->id]) }}">{{ $size->size }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4></li>
                                            @endforelse
										</ol>
									</dd>
									<dt>Brand</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($brands as $brand)
											<li><a href="{{ route('listing', ['brand_name' => $brand->id]) }}">{{ $brand->brand }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4></li>
                                            @endforelse
										</ol>
									</dd>
								</dl>
							</div>
							<div class="block block-special vt-slider">
								<div class="slider-inner">
									<div class="block-title">
										<strong>
										<span>Special products</span>
										</strong>
									</div>
									<div class="container-slider">
										<div class="wrap-item">
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															<a class="product-image" href="detail.html">
															<img src="images/photo/2.png" alt="">
															</a>
														</div>
													</div>
												</div>
											</div>
											<!--end item-->
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															<a class="product-image" href="detail.html">
															<img src="images/photo/4.png" alt="">
															</a>
														</div>
													</div>
												</div>
											</div>
											<!--end item-->
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															<a class="product-image" href="detail.html">
															<img src="images/photo/14.png" alt="">
															</a>
														</div>
													</div>
												</div>
											</div>
											<!--end item-->
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															<a class="product-image" href="detail.html">
															<img src="images/photo/13.png" alt="">
															</a>
														</div>
													</div>
												</div>
											</div>
											<!--end item-->
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															<a class="product-image" href="detail.html">
															<img src="images/photo/7.png" alt="">
															</a>
														</div>
													</div>
												</div>
											</div>
											<!--end item-->
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															<a class="product-image" href="detail.html">
															<img src="images/photo/5.png" alt="">
															</a>
														</div>
													</div>
												</div>
											</div>
											<!--end item-->
										</div>
										<!--wrap-item-->
									</div>
									<!--container-slider-->
								</div>
								<!--slider-inner-->
							</div>
							<!--block-special-->
						</div>
					</div>
					<div class="col-main col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<div class="box-breadcrumbs">
							<div class="breadcrumbs">
								<ul>
									<li class="home">
										<a href="index.html" title="Go to Home Page">Home</a>
										<span>|</span>
									</li>
									<li>
										<a href="{{ route('listing') }}">Listing</a>
									</li>
								</ul>
							</div>
						</div>
						{{-- <div class="block-tag">
							<label>Hot Tag</label>
							<a href="#"><span>Sexy</span></a>
							<a href="#"><span>Casual</span></a>
							<a href="#"><span>Slim</span></a>
							<a href="#"><span>Sleeveless</span></a>
							<a href="#"><span>Lace</span></a>
							<a href="#"><span>Chiffon</span></a>
							<a href="#"><span>Black</span></a>
							<a href="#"><span>White</span></a>
							<a href="#"><span>Sleeveless</span></a>
							<a href="#"><span>Slim</span></a>
							<a href="#"><span>Chiffon</span></a>
							<a href="#"><span>Lace</span></a>
							<a href="#"><span>Sexy</span></a>
							<a href="#"><span>Casual</span></a>
							<a href="#"><span>Black</span></a>
							<a href="#"><span>Slim</span></a>
							<span class="open-item closetag">open</span>
						</div> --}}
						<div id="catalog-listing">
							<div class="category-products">
								<div class="toolbar-top">
									<div class="toolbar col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="box-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="sort-by col-lg-8 col-md-8 col-sm-8 col-xs-8">
												<ul class="select-order">
													<li><a href="#auto-accessories.html?dir=asc&amp;order=price">Price</a></li>
													<li><a class="" href="{{ route('listing', ['sort_up']) }}"><i class="fas fa-sort-alpha-down"></i></a></li><li><a class="" href="{{ route('listing', ['sort_down']) }}"><i class="fas fa-sort-alpha-up"></i></a></li>
												</ul>
											</div>
											{{-- <div class="view-mode col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="inner">
													<label>View as</label>
													<p class="view-mode">
														<strong class="grid" title="Grid">Grid</strong>
														<a class="list" title="List" href="#auto-accessories.html?mode=list">List</a>&nbsp;
														</p>
													<span class="btn-view-mode">
													<a href="grid.html" title="List" class="grid">List</a>
													<a href="list.html" class="list">Grid</a>
													</span>
												</div>
											</div> --}}
										</div>
										{{-- <div class="box-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="limiter col-lg-3 col-md-3 col-sm-3 col-xs-6">
												<div class="limiter-inner">
													<span>Show</span>
													<div class="wrap-show">
														<div class="selected-limiter">12</div>
														<ul class="select-limiter">
															<li><a href="#auto-accessories.html?limit=12" class="selected">12</a></li>
															<li><a href="#auto-accessories.html?limit=24">24</a></li>
															<li><a href="#auto-accessories.html?limit=36">36</a></li>
														</ul>
													</div>
													<label class="stylepp">per page</label>
												</div>
											</div>
											<div class="pager col-lg-6 col-md-6 col-sm-5 col-xs-6">
												<p class="amount">
													Items 1 to 12 of 16 total
												</p>
												<div class="pages">
													<strong>Pages</strong>
													<ol>
														<li class="current">1</li>
														<li><a href="#auto-accessories.html?p=2">2</a></li>
														<li>
															<a class="next i-next" href="#auto-accessories.html?p=2" title="Next">Next</a>
														</li>
													</ol>
												</div>
											</div>
											<!--end pages-->
											<div class="go-to-page col-lg-3 col-md-3 col-sm-4 col-xs-12">
												<div class="inner">
													<label>Go to page:</label>
													<form action="#">
														<input type="text" id="gotopage" name="p" value="1">
														<input type="submit" class="button" id="btnpage" value="Go" name="subpage">
													</form>
												</div>
											</div>
										</div> --}}
									</div>
								</div>
								<ul class="products-grid">
									@forelse($products as $product)
									<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
										<div class="inner">
											<div class="item-image">
												<div class="item-image-inner">
													<a class="product-image" href="detail.html">
                                                        <img src="{{ url('../storage/app/public/'.$product->primary_image) }}" alt="">
													</a>
													<div class="item-btn">
														<div class="btn-wqc">
															<a href="{{ route('fill.wish', ['product' => $product]) }}" class="link-wishlist"></a>
															<a class="vt_quickview_handler" href="#"><span>Quick View</span></a>
															<a href="#" class="link-compare"></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-info">
												<div class="product-name">
													<a href="{{ route('details', ['product' => $product]) }}">{{ $product->title }}</a>
												</div>
												<div class="rating">
													<div class="ratings">
														<div class="rating-box">
															<div class="rating" style="width:80%"></div>
														</div>
													</div>
													<p class="rating-links">
														<a href="#">1 (vote)</a>
														<span class="separator">|</span>
														<a class="re-temp" href="">Add Review</a>
													</p>
												</div>
												<div class="wrap-ns-price">
													<div class="price-box">
														<p class="special-price">
															<span class="price">₹ {{ $product->selling_price }} - </span>
														</p>
														<p class="old-price">
															<span class="price">$200</span>
														</p>
													</div>
													<div class="wrap-new-sale">
														<div class="sale-item">60%</div>
														<div class="new-item">new</div>
													</div>
												</div>
											</div>
                                            {{-- @if (Auth::User()->role == 'user') --}}
											<div class="wrap-btn-cart">
                                                <div class="inner-wrap-btn-cart">
                                                    <a href="{{ route('fill.cart', ['product' => $product ]) }}" class="btn-cart"><span>Add to cart</span></a>
												</div>
											</div>
                                            {{-- @endif --}}
										</div>
									</li>
                                    @empty
                                        <h1 class="text-center">No Product Available</h1>
                                    @endforelse
								</ul>
								<div class="toolbar-bottom">
									{{-- <div class="toolbar col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="box-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="sort-by col-lg-8 col-md-8 col-sm-8 col-xs-8">
												<ul class="select-order">
													<li><a href="#auto-accessories.html?dir=asc&amp;order=position" class="selected">Position</a></li>
													<li><a href="#auto-accessories.html?dir=asc&amp;order=name">Name</a></li>
													<li><a href="#auto-accessories.html?dir=asc&amp;order=price">Price</a></li>
													<li><a class="desc" href="#auto-accessories.html?dir=desc&amp;order=position" title="Set Descending Direction"></a></li>
												</ul>
											</div> --}}
											{{-- <div class="view-mode col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="inner">
													<label>View as</label>
													<!--<p class="view-mode">
														<strong class="grid" title="Grid">Grid</strong>
														<a class="list" title="List" href="#auto-accessories.html?mode=list">List</a>&nbsp;
														</p>-->
													<span class="btn-view-mode">
													<a href="grid.html" title="List" class="grid">List</a>
													<a href="list.html" class="list">Grid</a>
													</span>
												</div>
											</div> --}}
										</div>
										{{-- <div class="box-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="limiter col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="limiter-inner">
													<span>Show</span>
													<div class="wrap-show">
														<div class="selected-limiter">12</div>
														<ul class="select-limiter">
															<li><a href="#auto-accessories.html?limit=12" class="selected">12</a></li>
															<li><a href="#auto-accessories.html?limit=24">24</a></li>
															<li><a href="#auto-accessories.html?limit=36">36</a></li>
														</ul>
													</div>
													<label class="stylepp">per page</label>
												</div>
											</div>
                                            <input type="text" name="text" value="10">
											<div class="pager col-lg-6 col-md-6 col-sm-5 col-xs-6">
												<p class="amount">
													Items 1 to 12 of 16 total
												</p>
												<div class="pages">
                                                    <strong>Pages</strong>
													<ol>
                                                        <li class="current">1</li>
														<li><a href="#auto-accessories.html?p=2">2</a></li>
														<li>
                                                            <a class="next i-next" href="#auto-accessories.html?p=2" title="Next">Next</a>
														</li>
													</ol>
												</div>
											</div>
											<!--end pages-->
											<div class="go-to-page col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <div class="inner">
                                                    <label>Go to page:</label>
													<form action="#">
                                                        <input type="text" id="gotopage" name="p" value="1">
														<input type="submit" class="button" id="btnpage" value="Go" name="subpage">
													</form>
												</div>
											</div>
										</div> --}}
									</div>
                                    {{ $products->links() }}
								</div>
								{{-- div class="block-buyer-protec col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="inner">
										<a class="icart" href="#">cart</a>
										<h2>Buyer Protection</h2>
										<ul>
											<li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<span class="text-style">Full Refund</span><span>if you don't receive your order</span>
											</li>
											<li class="last col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<span class="text-style">Refund or Keep</span><span>items not as described</span><br>
												<a href="#" class="link-more">Learn More</a>
											</li>
										</ul>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer">
		<div class="footer-newsletter">
			<div class="container">
				<div class="newsletter-intro">
					<span class="envalope-icon"><i class="fa fa-envelope-o"></i></span>
					<p>SUBSCRIBE TO OUR NEWSLETTER TO RECEIVE NEWS, <br/>UPDATES, AND ANOTHER STUFF BY EMAIL.</p>
				</div>
				<div class="newsletter-form">
					<form method="post">
						<input type="text" name="newsletter" value="Enter your email..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"  />
						<input type="submit" value="subscribe" />
					</form>
				</div>
			</div>
		</div>
		<!-- End Newsletter -->
		<div class="footer-quick-search">
			<div class="container">
				<div class="content-quick-search">
					<label>Quick link:</label>
					<a href="#">#</a>
					<a href="#">A</a>
					<a href="#">B</a>
					<a href="#">C</a>
					<a href="#">D</a>
					<a href="#">E</a>
					<a href="#">F</a>
					<a href="#">G</a>
					<a href="#">H</a>
					<a href="#">I</a>
					<a href="#">J</a>
					<a href="#">K</a>
					<a href="#">L</a>
					<a href="#">M</a>
					<a href="#">N</a>
					<a href="#">O</a>
					<a href="#">P</a>
					<a href="#">Q</a>
					<a href="#">R</a>
					<a href="#">S</a>
					<a href="#">U</a>
					<a href="#">V</a>
					<a href="#">W</a>
					<a href="#">X</a>
					<a href="#">Y</a>
					<a href="#">Z</a>
				</div>
			</div>
		</div>
		<!-- End Quick Search -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="logo-footer"><a href="#"><img src="images/home_1/logo.png" alt="" /></a></div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="copy-right">
							<p>© 2015        <a href="#" class="privacy-policy">Privacy Policy</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="contact-footer">
							<p>My Company , Glasgow D04 89GR<br/>Call us now: 800-2345-6789</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="social-footer">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-rss"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
    <script src="{{ asset('seller/js/jquery-3.3.1.min.js') }}"></script>
    <script>
    $(".notification").animate({right: '40px'});
            setTimeout(function(){
            $('.notification').slideUp(1000)}, 2500);
    </script>
	{{-- <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script> --}}
	<script src="https://kit.fontawesome.com/7ca433db62.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
</div>
</body>
</html>
