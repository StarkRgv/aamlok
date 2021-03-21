<!DOCTYPE HTML>
<html lang="en-US">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stark') }}</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/theme-default.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>
</head>
<body>
<div class="wrap">
	<header id="header" class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="images/home_1/logo.png" alt="" /></a>
                    </div>
                </div>
				<div class="search-form">
					<form action="{{ route('search') }}" method="get">
						<input type="text" name="search_query" value="Search" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"  />
						<input type="submit" value="" />
					</form>
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
													<div class="col-md-3 col-sm-3 col-xs-12">
														<div class="mega-menu-slider-brand">
															<h2>Men</h2>
															<div class="wrap-item">
																<div class="item">
																	<div class="inner-brand">
																		<ul>
																			<li><a href="#">Tops</a></li>
																			<li><a href="#">Sweaters</a></li>
																			<li><a href="#">Bottoms</a></li>
																			<li><a href="#">Dresses</a></li>
																			<li><a href="#">Coats &amp; Jackets</a></li>
																			<li><a href="#">Scarves</a></li>
																			<li><a href="#">Pants</a></li>
																		</ul>
																	</div>
																</div>
																<div class="item">
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
																</div>
															</div>
															<div class="owl-direct-nav">
																<a class="prev" href="#"><i class="fa fa-arrow-circle-left"></i></a>
																<a class="next" href="#"><i class="fa fa-arrow-circle-right"></i></a>
															</div>
														</div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<div class="mega-menu-slider-brand">
															<h2>Women</h2>
															<div class="wrap-item">
																<div class="item">
																	<div class="inner-brand">
																		<ul>
																			<li><a href="#">Tops</a></li>
																			<li><a href="#">Sweaters</a></li>
																			<li><a href="#">Bottoms</a></li>
																			<li><a href="#">Dresses</a></li>
																			<li><a href="#">Coats &amp; Jackets</a></li>
																			<li><a href="#">Scarves</a></li>
																			<li><a href="#">Pants</a></li>
																		</ul>
																	</div>
																</div>
																<div class="item">
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
																</div>
															</div>
															<div class="owl-direct-nav">
																<a class="prev" href="#"><i class="fa fa-arrow-circle-left"></i></a>
																<a class="next" href="#"><i class="fa fa-arrow-circle-right"></i></a>
															</div>
														</div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<div class="mega-menu-slider-brand">
															<h2>Boys</h2>
															<div class="wrap-item">
																<div class="item">
																	<div class="inner-brand">
																		<ul>
																			<li><a href="#">Tops</a></li>
																			<li><a href="#">Sweaters</a></li>
																			<li><a href="#">Bottoms</a></li>
																			<li><a href="#">Dresses</a></li>
																			<li><a href="#">Coats &amp; Jackets</a></li>
																			<li><a href="#">Scarves</a></li>
																			<li><a href="#">Pants</a></li>
																		</ul>
																	</div>
																</div>
																<div class="item">
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
																</div>
															</div>
															<div class="owl-direct-nav">
																<a class="prev" href="#"><i class="fa fa-arrow-circle-left"></i></a>
																<a class="next" href="#"><i class="fa fa-arrow-circle-right"></i></a>
															</div>
														</div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<div class="mega-menu-slider-brand">
															<h2>Girls</h2>
															<div class="wrap-item">
																<div class="item">
																	<div class="inner-brand">
																		<ul>
																			<li><a href="#">Tops</a></li>
																			<li><a href="#">Sweaters</a></li>
																			<li><a href="#">Bottoms</a></li>
																			<li><a href="#">Dresses</a></li>
																			<li><a href="#">Coats &amp; Jackets</a></li>
																			<li><a href="#">Scarves</a></li>
																			<li><a href="#">Pants</a></li>
																		</ul>
																	</div>
																</div>
																<div class="item">
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
																</div>
															</div>
															<div class="owl-direct-nav">
																<a class="prev" href="#"><i class="fa fa-arrow-circle-left"></i></a>
																<a class="next" href="#"><i class="fa fa-arrow-circle-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
                                <li class="has-mega-menu">
                                    <a href="{{ route('listing') }}">Listing</a>
                                </li>
                            <a href="#" class="btn-mobile-menu"></a>
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
					<div class="col-left sidebar col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<div class="inner-left">
							<div class="block block-layered-nav">
								<div class="block-title">
									<strong><span>Shop By</span></strong>
								</div>
								<dl id="narrow-by-list">
									<dt class="first">Category</dt>
									<dd>
										<ol>
											@foreach ($categories as $cat)												
											<li><a href="{{ route('listing', ['category_id' => $cat->id]) }}">{{ $cat->category }}</a></li>
											@endforeach
										</ol>
									</dd>
									<dt>Price</dt>
									<dd class="block-price">
										<div class="price">
											<div class="range-wrap">
												<div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="slider-range">
													<div style="left: 0%; width: 100%;" class="ui-slider-range ui-widget-header"></div>
													<a style="left: 0%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a>
													<a style="left: 100%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a>
												</div>
											</div>
											<div class="text-box">
												<div class="price-from"><span>$</span><input type="text" name="min" id="minPrice" class="priceTextBox pl" value="400"></div>
												<div class="price-to"><input type="text" name="max" id="maxPrice" class="priceTextBox pr" value="1000"></div>
												<a class="go" href="javascript:void(0)">Go</a>
											</div>
										</div>
									</dd>
									<dt>Color</dt>
									<dd class="block-color">
										<ol class="configurable-swatch-list">
											<li>
												<a href="grid.html?color=20" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/black.png" alt="Black" title="Black">
												</span>
												<span class="count">(5)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=27" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/blue.png" alt="Blue" title="Blue">
												</span>
												<span class="count">(1)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=221" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/brown.png" alt="Brown" title="Brown">
												</span>
												<span class="count">(2)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=17" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/charcoal.png" alt="Charcoal" title="Charcoal">
												</span>
												<span class="count">(3)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=19" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/orange.png" alt="Cognac" title="Cognac">
												</span>
												<span class="count">(7)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=24" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/green.png" alt="Green" title="Green">
												</span>
												<span class="count">(1)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=12" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/grey.png" alt="Grey" title="Grey">
												</span>
												<span class="count">(1)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=26" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/indigo.png" alt="Indigo" title="Indigo">
												</span>
												<span class="count">(5)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=13" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/ivory.png" alt="Ivory" title="Ivory">
												</span>
												<span class="count">(2)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=21" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/pink.png" alt="Pink" title="Pink">
												</span>
												<span class="count">(4)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=18" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/purple.png" alt="Purple" title="Purple">
												</span>
												<span class="count">(1)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=14" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/taupe.png" alt="Taupe" title="Taupe">
												</span>
												<span class="count">(1)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=22" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/white.png" alt="White" title="White">
												</span>
												<span class="count">(3)</span>
												</a>
											</li>
											<li>
												<a href="grid.html?color=23" class="swatch-link has-image">
												<span class="swatch-label">
												<img width="36" height="16" src="images/color/yellow.png" alt="Yellow" title="Yellow">
												</span>
												<span class="count">(3)</span>
												</a>
											</li>
										</ol>
									</dd>
									<dt>Size</dt>
									<dd class="block-size"> 
									</dd>
									<dt>Brand</dt>
									<dd class="block-brand">
										<ol>
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Jeans &amp; Trousers</a></li>
											<li><a href="#">Blouses &amp; Shirts</a></li>
											<li><a href="#">Tops &amp; T-Shirts</a></li>
											<li><a href="#">ackets &amp; Coats</a></li>
											<li><a href="#">Skirts</a></li>
										</ol>
									</dd>
									<dt>aterial</dt>
									<dd class="block-brand">
										<ol>
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Jeans &amp; Trousers</a></li>
											<li><a href="#">Blouses &amp; Shirts</a></li>
											<li><a href="#">Tops &amp; T-Shirts</a></li>
											<li><a href="#">ackets &amp; Coats</a></li>
											<li><a href="#">Skirts</a></li>
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
					<div class="col-main col-lg-6 col-md-8 col-sm-8 col-xs-12">
						<div class="box-breadcrumbs">
							<div class="breadcrumbs">
								<ul>
									<li class="home">
										<a href="#" title="Go to Home Page">Home</a>
										<span>|</span>
									</li>
									<li>
										<a href="#">Category Demo</a>
										<span>|</span>
									</li>
									<li class="category4">
										<strong>Beauty &amp; Perfumes</strong>
									</li>
								</ul>
							</div>
						</div>
						<div id="catalog-listing">
							<div class="category-products pro-list">
								<div class="toolbar-top">
									<div class="toolbar col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="box-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="sort-by col-lg-8 col-md-8 col-sm-8 col-xs-8">
												<ul class="select-order">
													<li><a href="#auto-accessories.html?dir=asc&amp;order=position" class="selected">Position</a></li>
													<li><a href="#auto-accessories.html?dir=asc&amp;order=name">Name</a></li>
													<li><a href="#auto-accessories.html?dir=asc&amp;order=price">Price</a></li>
													<li><a class="desc" href="#auto-accessories.html?dir=desc&amp;order=position" title="Set Descending Direction"></a></li>
												</ul>
											</div>
											<div class="view-mode col-lg-4 col-md-4 col-sm-4 col-xs-4">
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
											</div>
										</div>
										<div class="box-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
														<input type="text" id="gotopage1" name="p" value="1">
														<input type="submit" class="button" id="btnpage1" value="Go" name="subpage">
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ol class="products-list">
									@forelse($products as $product)
									<li class="item">
										<div class="inner">
											<div class="item-image">
												<div class="item-image-inner">
													 <a class="product-image" href="detail.html">
													<img src="{{ url('../storage/app/public/'.$product->primary_image) }}" alt="">
													</a>                             
													<div class="item-btn">
														<div class="btn-wqc">
															<a href="#" class="link-wishlist"></a>
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
												<div class="cate-name">
													<a href="#">{{ $product->genders->name }}</a>
													
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
															<span class="price">{{ $product->selling_price }}</span>
														</p>
														<p class="old-price">
															<span class="price">{{ $product->mrp }}</span>
														</p>
													</div>
													<div class="wrap-new-sale">
														<div class="sale-item">60%</div>
														<div class="new-item">new</div>
													</div>
												</div>
												<div class="desc">
													{{ $product->product_desc }}
												</div>
												<a class="button" href="{{ route('details', ['product' => $product]) }}">Shop now</a>
												<div class="box-qty-btncart">
													<button class="btn-cart"><span>Add To Cart</span></button>
													<div class="box-qty" >
														<div class="flycart_qty_edit">
															<a class="flycart-qty-btn left" href="#">down</a>
															<input type="text" class="input-text qty flycart-qty"  value="1">
															<a class="flycart-qty-btn right" href="#">up</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end inner -->                 
									</li>
								
								@empty
									<h1 class="text-center">No data Available</h1>
								@endforelse
								
							</ol>
								<div class="toolbar-bottom">
									<div class="toolbar col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="box-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="sort-by col-lg-8 col-md-8 col-sm-8 col-xs-8">
												<ul class="select-order">
													<li><a href="#auto-accessories.html?dir=asc&amp;order=position" class="selected">Position</a></li>
													<li><a href="#auto-accessories.html?dir=asc&amp;order=name">Name</a></li>
													<li><a href="#auto-accessories.html?dir=asc&amp;order=price">Price</a></li>
													<li><a class="desc" href="#auto-accessories.html?dir=desc&amp;order=position" title="Set Descending Direction"></a></li>
												</ul>
											</div>
											<div class="view-mode col-lg-4 col-md-4 col-sm-4 col-xs-4">
												<div class="inner">
													<label>View as</label>
													<!--<p class="view-mode">
														<strong class="grid" title="Grid">Grid</strong>
														<a class="list" title="List" href="#auto-accessories.html?mode=list">List</a>&nbsp;
														</p>-->
													<span class="btn-view-mode">
													<a href="grid.html" title="List" class="grid">List</a>
													<a href="list.html" title="Grid" class="list">Grid</a>
													</span>
												</div>
											</div>
										</div>
										<div class="box-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
										</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="col-right sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="inner-right">
							<div class="block block-pre-related vt-slider">
								<div class="slider-inner">
									<div class="block-title">
										<strong>
										<span>Premium Related Products</span>
										</strong>
									</div>
									<div class="container-slider">
										<div class="wrap-item products-grid">
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															 <a class="product-image" href="detail.html">
															<img src="images/photo/2.png" alt="">
															</a>                             
															<div class="item-btn">
																<div class="btn-wqc">
																	<a href="#" class="link-wishlist"></a>
																	<a class="vt_quickview_handler" href="#"><span>Quick View</span></a>
																	<a href="#" class="link-compare"></a>
																</div>
															</div>
														</div>
													</div>
													<div class="product-info">
														<div class="product-name">
															<a href="detail.html">Cotton Lycra Leggings</a>
														</div>
														<div class="cate-name">
															<a href="#">Men</a>
														</div>
														<div class="rating">
															<div class="ratings">
																<div class="rating-box">
																	<div style="width:80%" class="rating"></div>
																</div>
															</div>
															<p class="rating-links">
																<a href="#">1 (vote)</a>
																<span class="separator">|</span>
																<a href="" class="re-temp">Add Review</a>
															</p>
														</div>
														<div class="wrap-ns-price">
															<div class="price-box">
																<p class="special-price">
																	<span class="price">$500</span>
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
														<button class="btn-cart"><span>Add to cart</span></button>
													</div>
												</div>
											</div>
											<!--end item-->
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															 <a class="product-image" href="detail.html">
															<img src="images/photo/2.png" alt="">
															</a>                             
															<div class="item-btn">
																<div class="btn-wqc">
																	<a href="#" class="link-wishlist"></a>
																	<a class="vt_quickview_handler" href="#"><span>Quick View</span></a>
																	<a href="#" class="link-compare"></a>
																</div>
															</div>
														</div>
													</div>
													<div class="product-info">
														<div class="product-name">
															<a href="detail.html">Cotton Lycra Leggings</a>
														</div>
														<div class="cate-name">
															<a href="#">Men</a>
														</div>
														<div class="rating">
															<div class="ratings">
																<div class="rating-box">
																	<div style="width:80%" class="rating"></div>
																</div>
															</div>
															<p class="rating-links">
																<a href="#">1 (vote)</a>
																<span class="separator">|</span>
																<a href="" class="re-temp">Add Review</a>
															</p>
														</div>
														<div class="wrap-ns-price">
															<div class="price-box">
																<p class="special-price">
																	<span class="price">$500</span>
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
														<button class="btn-cart"><span>Add to cart</span></button>
													</div>
												</div>
											</div>
											<!--end item-->
											<div class="item">
												<div class="inner">
													<div class="item-image">
														<div class="item-image-inner">
															 <a class="product-image" href="detail.html">
															<img src="images/photo/2.png" alt="">
															</a>                             
															<div class="item-btn">
																<div class="btn-wqc">
																	<a href="#" class="link-wishlist"></a>
																	<a class="vt_quickview_handler" href="#"><span>Quick View</span></a>
																	<a href="#" class="link-compare"></a>
																</div>
															</div>
														</div>
													</div>
													<div class="product-info">
														<div class="product-name">
															<a href="detail.html">Cotton Lycra Leggings</a>
														</div>
														<div class="cate-name">
															<a href="#">Men</a>
														</div>
														<div class="rating">
															<div class="ratings">
																<div class="rating-box">
																	<div style="width:80%" class="rating"></div>
																</div>
															</div>
															<p class="rating-links">
																<a href="#">1 (vote)</a>
																<span class="separator">|</span>
																<a href="" class="re-temp">Add Review</a>
															</p>
														</div>
														<div class="wrap-ns-price">
															<div class="price-box">
																<p class="special-price">
																	<span class="price">$500</span>
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
														<button class="btn-cart"><span>Add to cart</span></button>
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
	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
</div>	
</body>
</html>