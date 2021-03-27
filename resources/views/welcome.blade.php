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
    <link href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body class="home-page">
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
        <div class="content-top">
            <div class="container">
                <div class="banner-simple-text">
                    <h2>THE BIGGEST</h2>
                    <h3>SALE OF THE day</h3>
                    <div class="text-special">
                        <strong>70</strong>
                        <span>%<br/>OFF</span>
                        <label>save up to</label>
                        <a href="#">Shop women</a>
                    </div>
                </div>
                <div class="banner-box-adv">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box-banner-adv odd bottom-right">
                                <a href="{{ route('listing', ['category_id' => 1]) }}" class="banner-adv-thumb-link"><img src="images/home_1/ad_01.png" alt="" /></a>
                                <div class="text-adv-intro">
                                    <h2>Men’s</h2>
                                    <h3>Collection</h3>
                                </div>
                                {{-- <div class="box-search-adv">

                                </div>
                                <a href="#" class="box-search-adv-link"><i class="fa fa-search"></i></a>
                                <div class="text-adv-hidden">
                                    <p>Many students are cash conteos</p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box-banner-adv even bottom-left">
                                <a href="{{ route('listing', ['category_id' => 2]) }}" class="banner-adv-thumb-link"><img src="images/home_1/ad_02.png" alt="" /></a>
                                <div class="text-adv-intro">
                                    <h2>Girl</h2>
                                    <h3>Fashion</h3>
                                </div>
                                {{-- <div class="box-search-adv">

                                </div>
                                <a href="#" class="box-search-adv-link"><i class="fa fa-search"></i></a>
                                <div class="text-adv-hidden">
                                    <p>Many students are cash conteos</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box-banner-adv odd top-right">
                                <a href="{{ route('listing', ['category_id' => 3]) }}" class="banner-adv-thumb-link"><img src="images/home_1/ad_03.png" alt="" /></a>
                                <div class="text-adv-intro">
                                    <h2>Kids</h2>
                                    <h3>Boys</h3>
                                </div>
                                {{-- <div class="box-search-adv">

                                </div>
                                <a href="#" class="box-search-adv-link"><i class="fa fa-search"></i></a>
                                <div class="text-adv-hidden">
                                    <p>Many students are cash conteos</p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box-banner-adv even top-left">
                                <a href="{{ route('listing', ['category_id' => 4]) }}" class="banner-adv-thumb-link"><img src="images/home_1/ad_04.png" alt="" /></a>
                                <div class="text-adv-intro">
                                    <h2>Kids</h2>
                                    <h3>Girls</h3>
                                </div>
                                {{-- <div class="box-search-adv">

                                </div>
                                <a href="#" class="box-search-adv-link"><i class="fa fa-search"></i></a>
                                <div class="text-adv-hidden">
                                    <p>Many students are cash conteos</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Top -->
        <div class="new-arrival-product">
            <div class="container">
                <div class="title-box-default">
                    <a href="#" class="prev-new-arrival"><i class="fa fa-arrow-circle-left"></i></a>
                    <span class="title-tab">New Arrivals</span>
                    <a href="#" class="next-new-arrival"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- End Title Slider -->
                <div class="content-product-slider">
                    <div class="wrap-item">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/1.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/1-1.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-sale">60%</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-sale">60%</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-sale">60%</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/11.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/11-11.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/12.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/12-12.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-sale">60%</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/18.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/18-18.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-new">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item-product">
                                        <div class="item-thumb-product">
                                            <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                            <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                            <div class="info-product-cart">
                                                <div class="inner-info-product-cart">
                                                    <ul>
                                                        <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                    </ul>
                                                    <a href="#" class="link-product-add-cart">Add to cart</a>
                                                </div>
                                            </div>
                                            <span class="status-product-sale">60%</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h3><a href="#">Chemise SLimFit</a></h3>
                                            <div class="info-product-price">
                                                <span>$45.99</span>
                                                <del>$69.71</del>
                                            </div>
                                            <div class="product-rating-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content Slider Product -->
            </div>
        </div>
        <!-- End New Arrival Product -->
        <div class="banner-grid-adv">
            <div class="clearfix">
                <div class="banner-grid-left">
                    <div class="wrap-grid-adv-box clearfix">
                        <div class="grid-image-box">
                            <a href="#"><img src="images/home_1/ad_05.png" alt="" /></a>
                        </div>
                        <div class="grid-text-box gray-box">
                            <div class="inner-grid-text-box">
                                <h3>Women’s</h3>
                                <h2>Live style</h2>
                                <h3>Danlien Polosa</h3>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-grid-adv-box clearfix">
                        <div class="grid-text-box">
                            <div class="inner-grid-text-box">
                                <h3>men’s</h3>
                                <h2>Collection</h2>
                                <h3>Hat &amp; Cavar</h3>
                            </div>
                        </div>
                        <div class="grid-image-box">
                            <a href="#"><img src="images/home_1/ad_06.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="wrap-grid-adv-box clearfix">
                        <div class="grid-image-box">
                            <a href="#"><img src="images/home_1/ad_07.png" alt="" /></a>
                        </div>
                        <div class="grid-text-box gray-box">
                            <div class="inner-grid-text-box">
                                <h3>Shoes</h3>
                                <h2>hugpo Dinp</h2>
                                <h3>join cena</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-grid-right">
                    <div class="grid-image-box">
                        <a href="#"><img src="images/home_1/ad_08.png" alt="" /></a>
                    </div>
                    <div class="grid-text-box active">
                        <div class="inner-grid-text-box">
                            <h3>Collection</h3>
                            <h2>Jewerly</h2>
                            <h3>For Girl</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Grid Adv -->
        <div class="new-arrival-product">
            <div class="container">
                <div class="title-box-default">
                    <a href="#" class="prev-new-arrival"><i class="fa fa-arrow-circle-left"></i></a>
                    <ul class="list-inline list-title-tab nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">POPULAR</a></li>
                        <li role="presentation"><a href="#seller" aria-controls="seller" role="tab" data-toggle="tab">BEST SELLERS</a></li>
                        <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">SPECIALS</a></li>
                    </ul>
                    <a href="#" class="next-new-arrival"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- End Title Slider -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="popular">
                        <div class="content-product-slider">
                            <div class="wrap-item">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/1.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/1-1.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/11.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/11-11.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/12.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/12-12.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/18.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/18-18.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Content Slider Product -->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="seller">
                        <div class="content-product-slider">
                            <div class="wrap-item">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/1.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/1-1.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/11.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/11-11.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/12.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/12-12.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/18.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/18-18.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Content Slider Product -->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="special">
                        <div class="content-product-slider">
                            <div class="wrap-item">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/11.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/11-11.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/12.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/12-12.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/18.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/18-18.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/20.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/20-20.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/1.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/1-1.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/3.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/3-3.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/9.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/9-9.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/10.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/10-10.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-sale">60%</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/21.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/21-21.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="item-thumb-product">
                                                    <img src="images/product_home1/8.jpg" alt="" class="product-thumb-front" />
                                                    <img src="images/product_home1/8-8.jpg" alt="" class="product-thumb-behind" />
                                                    <div class="info-product-cart">
                                                        <div class="inner-info-product-cart">
                                                            <ul>
                                                                <li><a href="#" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
                                                                <li><a href="#" class="link-quick-view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" class="link-compare"><i class="fa fa-external-link-square"></i></a></li>
                                                            </ul>
                                                            <a href="#" class="link-product-add-cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <span class="status-product-new">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <h3><a href="#">Chemise SLimFit</a></h3>
                                                    <div class="info-product-price">
                                                        <span>$45.99</span>
                                                        <del>$69.71</del>
                                                    </div>
                                                    <div class="product-rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->
                            </div>
                        </div>
                        <!-- End Content Slider Product -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Product Tab -->
        <div class="list-designer">
            <div class="container">
                <div class="content-list-designer">
                    <label>DESIGNERS:</label>
                    <ul class="list-inline">
                        <li class="item-designer">
                            <a href="#" class="designer-thumb">
                                <img src="images/home_1/page1-img6.jpg" alt="" />
                            </a>
                            <h3><a href="#">Elizabet Sosuna</a></h3>
                        </li>
                        <li class="item-designer">
                            <a href="#" class="designer-thumb">
                                <img src="images/home_1/page1-img5.jpg" alt="" />
                            </a>
                            <h3><a href="#">David Cilezege</a></h3>
                        </li>
                        <li class="item-designer">
                            <a href="#" class="designer-thumb">
                                <img src="images/home_1/page1-img4.jpg" alt="" />
                            </a>
                            <h3><a href="#">Ana Hovurt</a></h3>
                        </li>
                    </ul>
                    <a href="#" class="see-all-designer">see all designers</a>
                </div>
            </div>
        </div>
        <!-- End List Designer -->
        <div class="category-leading">
            <div class="container">
                <div class="thumb-category-leading">
                    <a href="#"><img alt="" src="images/product_home1/10.jpg"></a>
                    <div class="text-category-leading">
                        <span>New</span>
                        <h2>Collection</h2>
                    </div>
                </div>
                <div class="content-category-leading">
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/1.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/1-1.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/3.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/3-3.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/8.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/8.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/9.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/9-9.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/10.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/10-10.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/11.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/11-11.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/12.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/12-12.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/14.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/14-14.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/18.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/18-18.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-category-leading">
                        <div class="item-thumb-product">
                            <a class="product-thumb-link" href="#">
                                <img alt="" src="images/product_home1/21.jpg">
                            </a>
                            <div class="leading-info-product-cart">
                                <a class="product-thumb-link" href="#">
                                    <img alt="" src="images/product_home1/21-21.jpg">
                                </a>
                                <div class="info-product-cart">
                                    <div class="inner-info-product-cart">
                                        <ul>
                                            <li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>
                                            <li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>
                                        </ul>
                                        <a class="link-product-add-cart" href="#">Add to cart</a>
                                        <div class="info-product-price">
                                            <span>$489.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Category Leading -->
        <div class="custom-services">
            <div class="container">
                <div class="title-box-default">
                    <h2><span class="title-tab">custom services</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="item-service-box">
                            <h3>idea Design</h3>
                            <a href="#" class="item-service-link"><img src="images/home_1/icon_pen.png" alt="" /></a>
                            <p>Proin dignissim commodo velit a venenatis. Pellentesque mollis faucibus posuere Casy yoleacene anritv antacus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="item-service-box">
                            <h3>Confection</h3>
                            <a href="#" class="item-service-link"><img src="images/home_1/icon_keo.png" alt="" /></a>
                            <p>Aliquam erat voltpatis aturp nteger rutrum kerdele rtanuty mu myatrsas detyuasirtase. Santac us uisque nuaderas</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="item-service-box">
                            <h3>Confection</h3>
                            <a href="#" class="item-service-link"><img src="images/home_1/icon_camera.png" alt="" /></a>
                            <p>Fatis acaturp liquam eravoltp nteger rutrum kerua delertas nuty myatrsas detyuas. Santacus isque nulladeras. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Custom Services -->
        <div class="from-our-blog">
            <div class="container">
                <div class="title-box-default white-arrow-style">
                    <h2><span class="title-tab">FROM OUR BLOG</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item-our-blog">
                            <div class="our-blog-thumb">
                                <a href="#">
                                    <img src="images/home_1/blog/blog1.png" alt="" />
                                </a>
                            </div>
                            <div class="our-blog-info">
                                <div class="inner-our-blog-info">
                                    <span>Jun 23 2014</span>
                                    <h3><a href="#">Cupidatat none proident amet</a></h3>
                                    <span>9 Comments</span>
                                    <div class="post-extra-link">
                                        <a href="#"><img src="images/home_1/icon-search.png" alt="" /></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item-our-blog">
                            <div class="our-blog-thumb">
                                <a href="#">
                                    <img src="images/home_1/blog/blog2.png" alt="" />
                                </a>
                            </div>
                            <div class="our-blog-info">
                                <div class="inner-our-blog-info">
                                    <span>Jun 23 2014</span>
                                    <h3><a href="#">Cupidatat none proident amet</a></h3>
                                    <span>9 Comments</span>
                                    <div class="post-extra-link">
                                        <a href="#"><img src="images/home_1/icon-search.png" alt="" /></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item-our-blog">
                            <div class="our-blog-thumb">
                                <a href="#">
                                    <img src="images/home_1/blog/blog3.png" alt="" />
                                </a>
                            </div>
                            <div class="our-blog-info">
                                <div class="inner-our-blog-info">
                                    <span>Jun 23 2014</span>
                                    <h3><a href="#">Cupidatat none proident amet</a></h3>
                                    <span>9 Comments</span>
                                    <div class="post-extra-link">
                                        <a href="#"><img src="images/home_1/icon-search.png" alt="" /></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item-our-blog">
                            <div class="our-blog-thumb">
                                <a href="#">
                                    <img src="images/home_1/blog/blog4.png" alt="" />
                                </a>
                            </div>
                            <div class="our-blog-info">
                                <div class="inner-our-blog-info">
                                    <span>Jun 23 2014</span>
                                    <h3><a href="#">Cupidatat none proident amet</a></h3>
                                    <span>9 Comments</span>
                                    <div class="post-extra-link">
                                        <a href="#"><img src="images/home_1/icon-search.png" alt="" /></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item-our-blog">
                            <div class="our-blog-thumb">
                                <a href="#">
                                    <img src="images/home_1/blog/blog5.png" alt="" />
                                </a>
                            </div>
                            <div class="our-blog-info">
                                <div class="inner-our-blog-info">
                                    <span>Jun 23 2014</span>
                                    <h3><a href="#">Cupidatat none proident amet</a></h3>
                                    <span>9 Comments</span>
                                    <div class="post-extra-link">
                                        <a href="#"><img src="images/home_1/icon-search.png" alt="" /></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item-our-blog">
                            <div class="our-blog-thumb">
                                <a href="#">
                                    <img src="images/home_1/blog/blog6.png" alt="" />
                                </a>
                            </div>
                            <div class="our-blog-info">
                                <div class="inner-our-blog-info">
                                    <span>Jun 23 2014</span>
                                    <h3><a href="#">Cupidatat none proident amet</a></h3>
                                    <span>9 Comments</span>
                                    <div class="post-extra-link">
                                        <a href="#"><img src="images/home_1/icon-search.png" alt="" /></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End From our blog -->
    </div>
    <!-- End Content -->
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
    <script type="text/javascript" src="{{ asset('js/jquery-1.12.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
</div>
</body>
</html>
