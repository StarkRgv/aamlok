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
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/theme-default.css') }}" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="all"/>

	<style type="text/css">
		.custom-radio{
			opacity: 1;
			width: 100%;
			height: 100%;
			position: absolute;
			z-index: 7;
			left: 0;
			opacity: 0;
			cursor: pointer;
		}
		.highlight {
		  background-color: red;
		  color: white; !important
		}
	</style>
</head>
<body>

<div class="wrap">
	<header id="header" class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/home_1/logo.png') }}" alt="" /></a>
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
				<div class="box-breadcrumbs">
					<div class="breadcrumbs">
						<ul>
							<li class="home">
								<a title="Go to Home Page" href="{{ url('/') }}">Home</a>
								<span>|</span>
							</li>
							<li class="product">
								<strong>{{ $product->title }}</strong>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-main col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<div id="messages_product_view"></div>
						<div class="product-view">
							<div class="product-essential">
								<form enctype="multipart/form-data" id="product_addtocart_form" action="{{ route('create.order') }}" method="POST">
									@csrf
									@php
                                        $status = app()->request->color;
                                        $count = $sizes->sum('quantity');
                                    @endphp
									<div class="product-img-box col-lg-7 col-md-7 col-sm-12 col-xs-12">
										<div class="inner">
											<div class="img-left">
												<div class="product-image product-image-zoom">
													<div class="product-image-gallery">
                                                    @if (empty($status))
														<img width="380" height="570" title="Plaid Cotton Shirt-Khaki-M" alt="" src="{{ url('../storage/app/public/'.$product->primary_image) }}" class="gallery-image visible" id="image-main">
													@else
														@forelse($images as $key => $image)
														@if($loop->first)
															<img width="380" height="570" title="Plaid Cotton Shirt-Khaki-M" alt="" src="{{ url('../storage/app/public/'.$image->file_path) }}" class="gallery-image visible" id="image-main">
														@endif
														@empty
															<img width="380" height="570" title="Plaid Cotton Shirt-Khaki-M" alt="" src="{{ url('../storage/app/public/'.$product->primary_image) }}" class="gallery-image visible" id="image-main">
														@endforelse
													@endif
													</div>
												</div>
												<!--product-image-zoom-->
												<div class="popup-btn  hidden-phone">
													<a href="#" data-fancybox-group="button" class="fancybox-buttons" id="popup-image">
													Click to popup images		</a>
													<a href="#" data-fancybox-group="button" class="fancybox-buttons">
													</a>
													<a href="#" data-fancybox-group="button" class="fancybox-buttons">
													</a>
													<a href="#" data-fancybox-group="button" class="fancybox-buttons">
													</a>
													<a href="#" data-fancybox-group="button" class="fancybox-buttons">
													</a>
													<a href="#" data-fancybox-group="button" class="fancybox-buttons">
													</a>
												</div>
												<!--popup-btn-->
											</div>
											<div class="more-views">
												<div class="navslider">
													<a class="prev">prev</a>
													<a class="next">next</a>
												</div>
												<div class="inner">
													<div class="jCarouselLite">
														<ul class="product-image-thumbs">
															@foreach($images as $key => $image)
															<li >
																<a data-image-index="0" title="" href="#" class="thumb-link">
																    <img alt="image" src="{{ url('../storage/app/public/'.$image->file_path) }}">
																</a>
															</li>
															@endforeach
														</ul>
													</div>
												</div>
											</div>
											<!--more-views-->
										</div>
									</div>
									<div class="product-shop col-lg-5 col-md-5 col-sm-12 col-xs-12">
										<div class="box-left">
											<div class="product-name">
												<h1>{{ $product->title }}</h1>
											</div>
											<div class="rating">
												<div class="ratings">
													<div class="rating-box">
														<div style="width:87%" class="rating"></div>
													</div>
												</div>
												<p class="rating-links">
													<a href="#">1 (vote)</a>
													<span class="separator">|</span>
													<a href="#" class="re-temp">Add Review</a>
												</p>
											</div>
											{{-- <div class="product-code box-style">
												<ul>
													<li class="first">Product Id</li>
													<li class="last">{{ $product->product_id }}</li>
												</ul>
											</div> --}}
											<div class="availability in-stock box-style">
												<ul>                                              
													<li class="first">Availability</li>
                                                    @if (!empty($status))
													    <li class="last">In stock ({{ $count }})</li>
                                                    @else
													    <li class="last">In stock ({{ $stockCount }})</li>
                                                    @endif
												</ul>
											</div>
											<div class="short-description">
												<div class="std">
												{{ $product->product_desc }}
												</div>
											</div>
											<div class="wrap-ns-price">
												<div class="price-box">
													<span class="regular-price">
													<span class="price">₹ {{ $product->selling_price }}</span>                                    </span>
												</div>
												<div class="wrap-new-sale">
												</div>
											</div>

											<div class="product-addto">
												<div class="product-addto-inner">
													<div id="product-options-wrapper" class="product-options">
														<div class="last">
                                                            

                                                            <div class="group-item last first" style="border:none">
																<span><label>Color</label></span>
																<div class="last option-size">
																	<div class="input-box">
																		<ul class="options-list" id="options-42-list">
                                                                            @foreach ($colors as $key => $color)
																			<a href="{{ route('details', ['product' => $product, 'color'=> $color->color]) }}"><li class="{{ $status == $color->colors->id ? 'highlight' : '' }}"><span class="label"><label>{{ $color->colors->color }} </label></span></li></a>
                                                                            @endforeach
                                                                            <input type="hidden" name="color" value="{{ $status }}">
																		</ul>
																	</div>
																</div>
															</div>
															@if (!empty($status))
															<div class="group-item last first" style="border:none">
																<span><label>Size</label></span>
																<div class="last option-size">
                                                                    <div class="input-box">
                                                                        <ul class="options-list" id="options-42-list">
                                                                        <a href="{{ route('details', ['product' => $product]) }}"><li><span class="label"><label for="options_42">None</label></span></li></a>
                                                                        @forelse ($sizes as $key => $size)
                                                                            <li id="size_{{ $size->sizes->id }}"><span class="label"><label>{{ $size->sizes->size }}</label></span></li>
                                                                        @empty
                                                                            No Stock Available
                                                                        @endforelse
                                                                        <input id="add-size" type="hidden" name="size_id" value="">
																		</ul>
																	</div>
																</div>
															</div>
                                                            @endif
														</div>
													</div>
													<span id="color-alert" class="text-danger"></span>

													<span id="size-alert" class="text-danger"></span>

													<div class="product-options-bottom">
														<div class="add-to-cart">
														@if (!empty($status) && empty($count))
															<button class="button btn-cart" onclick="alert('Please select a color')" id="product-addtocart-button" title="Add to Cart" type="button"><span><span>Buy</span></span></button>
														@elseif (!empty($status))
															<input type="number" class="input-text qty" title="Qty" value="1" min="1" max="10" id="qty" name="quantiy">
															<button class="button btn-cart" type="submit"  id="product-addtocart-button" title="Add to Cart" type="button">
                                                                <span><span>Buy</span></span>
                                                            </button>
                                                        @else
															<button class="button btn-cart" id="color_alert" title="Add to Cart" type="button"><span><span>Buy</span></span></button>
														@endif
														</div>
														{{-- <ul class="add-to-links ">
															<li><a class="link-wishlist" onclick="productAddToCartForm.submitLight(this, this.href); return false;" href="#">Wishlist</a></li>
															<li><span class="separator">|</span> <a class="link-compare" href="#">Compare</a></li>
															<li><a href="#" class="email-friend">Email</a></li>
															<li><a href="#" class="print">Print</a></li>
														</ul> --}}
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

								{{-- Details --}}
								<div id="product-tabs">
									<div class="inner">										
										<div class="tab-content">
											<h2>Details</h2>
											<hr>
											<div class="std">
												<div class="des-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
													<ul>
														<li><span class="text-left">Gender:</span><span class="text-right">{{ $product->genders->name }}</span></li>
														<li><span class="text-left">Style Name:</span><span class="text-right">{{ ucfirst($product->style_name) }}</span></li>
														<li><span class="text-left">Fitting Type:</span><span class="text-right">{{ ucfirst($product->fitting_type) }}</span></li>
														<li><span class="text-left">Pattern Type: </span><span class="text-right">{{ ucfirst($product->pattern) }}</span></li>
														<li><span class="text-left">Brand Name:</span><span class="text-right">{{ $product->brands->brand }}</span></li>
														<li><span class="text-left">Rise Style:</span><span class="text-right">{{ ucfirst($product->rise_style) }}</span></li>
														<li><span class="text-left">Fabric Type:</span><span class="text-right">{{ ucfirst($product->fabric_type) }}</span></li>
														<li><span class="text-left">Manufacturer:</span><span class="text-right">{{ ucfirst($product->manufacturer) }}</span></li>
														<li><span class="text-left">Origin Country:</span><span class="text-right">{{ ucfirst($product->origin_country) }}</span></li>
													</ul>
												</div>
												<div class="des-right col-lg-8 col-md-8 col-sm-8 col-xs-12">
													@if($product->care_instructions != "" || $product->care_instructions != NULL)
													<h5>Care Instructions</h5>
													<p>{{ $product->care_instructions }}</p>
													@endif

													@if($product->occasion_instructions != "" || $product->occasion_instructions != NULL)
													<h5>Occasion Instructions</h5>
													<p>{{ $product->occasion_instructions }}</p>
													@endif

													@if($product->material_composition != "" || $product->material_composition != NULL)
													<h5>Material Composition</h5>
													<p>{{ $product->material_composition }}</p>
													@endif


													@if($product->item_length_desc != "" || $product->item_length_desc != NULL)
													<h5>Item Length Description</h5>
													<p>{{ $product->item_length_desc }}</p>
													@endif


													@if($product->key_feature != "" || $product->key_feature != NULL)
													<h5>Key Feature</h5>
													<p>{{ $product->key_feature }}</p>
													@endif
													
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- End Details --}}

								{{-- Review --}}
								<div id="product-tabs">
									<div class="inner">
										<div class="tab-content">
											<h2>Customer Reviews</h2>
											<hr>
											<dl>
												<dt>
													<a href="#">Nullam egestas, ante ut porta egestas.</a> Review by <span>7uptheme</span>
												</dt>
												<dd>
													<table class="ratings-table">
														<colgroup>
															<col span="1">
															<col>
														</colgroup>
														<tbody>
															<tr>
																<th>Quality</th>
																<td>
																	<div class="rating-box">
																		<div style="width:100%;" class="rating"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<th>Price</th>
																<td>
																	<div class="rating-box">
																		<div style="width:80%;" class="rating"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<th>Value</th>
																<td>
																	<div class="rating-box">
																		<div style="width:80%;" class="rating"></div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
													Nullam egestas, ante ut porta egestas, lorem felis pretium risus, at lobortis nibh leo eget nibh. Integer pulvinar lorem quis iaculis iaculis. Sed at diam nec est interdum pharetra in id enim. Etiam ac nulla vitae nisi laoreet scelerisque nec ac est. Sed gravida tortor sem, et malesuada erat pharetra quis. Nullam rutrum pharetra nibh, eget accumsan nisi vehicula ut. In ac lorem ut odio rhoncus sollicitudin. Curabitur tincidunt venenatis nisl, eget facilisis nisl varius eget.                <small class="date">(Posted on 3/24/2015)</small>
												</dd>
											</dl>
											<div class="form-add">
												<h2>Write Your Own Review</h2>
												<form id="review-form" method="post" action="#">
													<input type="hidden" value="MG4MpXwwnitHheJz" name="form_key">
													<fieldset>
														<h4>You're reviewing: <span>{{ $product->title }}</span></h4>
														<span id="input-message-box"></span>
														<table id="product-review-table" class="data-table">
															<colgroup>
																<col>
																<col span="1">
																<col span="1">
																<col span="1">
																<col span="1">
																<col span="1">
															</colgroup>
															<thead>
																<tr class="first last">
																	<th>&nbsp;</th>
																	<th><span class="nobr">1 star</span></th>
																	<th><span class="nobr">2 stars</span></th>
																	<th><span class="nobr">3 stars</span></th>
																	<th><span class="nobr">4 stars</span></th>
																	<th><span class="nobr">5 stars</span></th>
																</tr>
															</thead>
															<tbody>
																<tr class="first odd">
																	<th>Quality</th>
																	<td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
																	<td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
																	<td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
																	<td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
																	<td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
																</tr>
																<tr class="even">
																	<th>Price</th>
																	<td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
																	<td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
																	<td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
																	<td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
																	<td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
																</tr>
																<tr class="last odd">
																	<th>Value</th>
																	<td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
																	<td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
																	<td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
																	<td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
																	<td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
																</tr>
															</tbody>
														</table>
														<input type="hidden" value="" class="validate-rating" name="validate_rating">
														<ul class="form-list">
															<li>
																<label class="required" for="nickname_field"><em>*</em>Nickname</label>
																<div class="input-box">
																	<input type="text" value="" class="input-text required-entry" id="nickname_field" name="nickname">
																</div>
															</li>
															<li>
																<label class="required" for="summary_field"><em>*</em>Summary of Your Review</label>
																<div class="input-box">
																	<input type="text" value="" class="input-text required-entry" id="summary_field" name="title">
																</div>
															</li>
															<li>
																<label class="required" for="review_field"><em>*</em>Review</label>
																<div class="input-box">
																	<textarea class="required-entry" rows="3" cols="5" id="review_field" name="detail"></textarea>
																</div>
															</li>
														</ul>
													</fieldset>
													<div class="buttons-set">
														<button class="button" title="Submit Review" type="submit"><span><span>Submit Review</span></span></button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								{{-- End Review --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
						<div class="logo-footer"><a href="#"><img src="{{ asset('images/home_1/logo.png') }}" alt="" /></a></div>
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
	<script type="text/javascript" src="{{ asset('js/jquery-1.12.0.min.js') }}"></script>

	<script type="text/javascript">
		$('li[id^="size_"]').click(function(){
			var id = $(this).attr('id');
			var id_num = id.split('_').pop();
			$("#add-size").val(id_num);
			$('#size_' + id_num).addClass('highlight');
			$('li[id^="size_"]').not('#size_' + id_num).removeClass('highlight');

		});

		$(document).ready(function(){
			$("#add-size").val('');

		    $('#product_addtocart_form').on('submit', function(e){
		        e.preventDefault();
		        var size = $("#add-size").val();
		        if (!size) {
		        	$("#size-alert").text("Please select a Size");
		        }else{
		        	this.submit();
		        }
		    });

		    $('#color_alert').on('click', function(e){
		        $("#color-alert").text("Please select a Color");
		    });
		});
	</script>
	<!-- End Footer -->
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jcarousellite_1.0.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
</div>
</body>
</html>
