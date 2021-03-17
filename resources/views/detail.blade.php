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
                                    <a href="{{ route('listing') }}">Listing</a>
                                </li>
                            <a href="#" class="btn-mobile-menu"></a>
                        </nav>
                        <!-- End Nav -->
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-6">
                        <div class="header-info">
                            @guest
                            <div class="box-account-lc box">
                                <a href="{{ route('login') }}" class="link-user-top">Login</a>
                            </div>
                            <div class="block-cart box">
                                <a href="{{ route('register') }}" class="link-cart-top">Register </a>        
                                <div class="block-content box-inner">
                                </div>
                            </div>
                            @endauth
                            @if(auth()->user())
                            
                            <div class="box-account-lc box">
                                <a href="{{ route('home') }}" class="link-user-top">{{ auth()->user()->name }}</a>
                            </div>
                            @endauth
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
								<form enctype="multipart/form-data" id="product_addtocart_form" method="post" action="#">
									<input type="hidden" value="MG4MpXwwnitHheJz" name="form_key">
									<div class="no-display">
										<input type="hidden" value="916" name="product">
										<input type="hidden" value="" id="related-products-field" name="related_product">
									</div>
									<div class="product-img-box col-lg-7 col-md-7 col-sm-12 col-xs-12">
										<div class="inner">
											<div class="img-left">
												<div class="product-image product-image-zoom">
													<div class="product-image-gallery">
														<img width="380" height="570" title="Plaid Cotton Shirt-Khaki-M" alt="" src="{{ url('../storage/app/public/'.$product->image->file_path) }}" class="gallery-image visible" id="image-main">
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
															{{-- {{ $product->image }} --}}
															@foreach($product->images as $key => $image)
															<li >
																<a data-image-index="0" title="" href="#" class="thumb-link">
																<img alt="" src="{{ url('../storage/app/public/'.$image->file_path) }}">
																</a>
															</li>
															@endforeach
															{{-- <li >
																<a data-image-index="1" title="pink" href="#" class="thumb-link">
																<img alt="pink" src="images/photo/12.png">
																</a>
															</li>
															<li >
																<a data-image-index="2" title="indigo" href="#" class="thumb-link">
																<img alt="indigo" src="images/photo/13.png">
																</a>
															</li>
															<li >
																<a data-image-index="3" title="orange" href="#" class="thumb-link">
																<img alt="orange" src="images/photo/14.png">
																</a>
															</li>
															<li >
																<a data-image-index="4" title="" href="#" class="thumb-link">
																<img alt="" src="images/photo/15.png">
																</a>
															</li>
															<li >
																<a data-image-index="0" title="" href="#" class="thumb-link">
																<img alt="" src="images/photo/16.png">
																</a>
															</li>
															<li >
																<a data-image-index="1" title="pink" href="#" class="thumb-link">
																<img alt="pink" src="images/photo/17.png">
																</a>
															</li>
															<li >
																<a data-image-index="2" title="indigo" href="#" class="thumb-link">
																<img alt="indigo" src="images/photo/18.png">
																</a>
															</li>
															<li >
																<a data-image-index="3" title="orange" href="#" class="thumb-link">
																<img alt="orange" src="images/photo/19.png">
																</a>
															</li>
															<li >
																<a data-image-index="4" title="" href="#" class="thumb-link">
																<img alt="" src="images/photo/20.png">
																</a>
															</li>
															<li >
																<a data-image-index="0" title="" href="#" class="thumb-link">
																<img alt="" src="images/photo/1.png">
																</a>
															</li>
															<li >
																<a data-image-index="1" title="pink" href="#" class="thumb-link">
																<img alt="pink" src="images/photo/2.png">
																</a>
															</li>
															<li >
																<a data-image-index="2" title="indigo" href="#" class="thumb-link">
																<img alt="indigo" src="images/photo/11.png">
																</a>
															</li>
															<li >
																<a data-image-index="3" title="orange" href="#" class="thumb-link">
																<img alt="orange" src="images/photo/11.png">
																</a>
															</li>
															<li>
																<a data-image-index="4" title="" href="#" class="thumb-link">
																<img alt="" src="images/photo/11.png">
																</a>
															</li> --}}
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
											<div class="product-code box-style">
												<ul>
													<li class="first">Product Id</li>
													<li class="last">{{ $product->product_id }}</li>
												</ul>
											</div>
											<div class="availability in-stock box-style">
												<ul>
													<li class="first">Availability</li>
													<li class="last">In stock ({{ $product->in_stock }})</li>
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
													<span class="price">{{ $product->selling_price }}</span>                                    </span>
												</div>
												<div class="wrap-new-sale">								
												</div>
											</div>
											<div class="product-addto">
												<div class="product-addto-inner">
													<div id="product-options-wrapper" class="product-options">
														<div class="last">
															<div class="group-item  first item1">
																<span><label>Color</label></span>
																<div class="option-color">
																	<div class="input-box">
																		<ul class="options-list" id="options-41-list">
																			<li><input type="radio" checked="checked" value="" name="options[41]" class="radio product-custom-option" id="options_41"><span class="label"><label for="options_41">None</label></span></li>
																			<li class="item2" style="background: rgb(77, 109, 189) none repeat scroll 0% 0%;"><input type="radio" value="201" class="radio  product-custom-option"><span class="label"><label>Blue_#4d6dbd <span class="price-notice">+<span class="price">$1.00</span></span></label></span></li>
																			<li style="background: rgb(114, 178, 38) none repeat scroll 0% 0%;"><input type="radio" value="202" class="radio  product-custom-option"><span class="label"><label>Green_#72b226 <span class="price-notice">+<span class="price">$2.00</span></span></label></span></li>
																			<li style="background: rgb(47, 188, 218) none repeat scroll 0% 0%;"><input type="radio" value="203" class="radio  product-custom-option"><span class="label"><label>Indigo_#2fbcda <span class="price-notice">+<span class="price">$3.00</span></span></label></span></li>
																			<li style="background: rgb(251, 93, 93) none repeat scroll 0% 0%;"><input type="radio" value="204" class="radio  product-custom-option"><span class="label"><label>Red_#fb5d5d <span class="price-notice">+<span class="price">$4.00</span></span></label></span></li>
																			<li style="background: rgb(255, 224, 12) none repeat scroll 0% 0%;"><input type="radio" value="205" class="radio  product-custom-option"><span class="label"><label>Yellow_#ffe00c <span class="price-notice">+<span class="price">$5.00</span></span></label></span></li>
																		</ul>
																		<span class="group-color">					
																		<input type="hidden" value="#4d6dbd" name="options_41_2" class="item_options">
																		<input type="hidden" value="#72b226" name="options_41_3" class="item_options">
																		<input type="hidden" value="#2fbcda" name="options_41_4" class="item_options">
																		<input type="hidden" value="#fb5d5d" name="options_41_5" class="item_options">
																		<input type="hidden" value="#ffe00c" name="options_41_6" class="item_options">
																		</span>
																	</div>
																</div>
															</div>
															<div class="group-item  last first">
																<span><label>Size</label></span>
																<div class="last option-size">
																	<div class="input-box">
																		<ul class="options-list" id="options-42-list">
																			<li><input type="radio" checked="checked" value="" name="options[42]" class="radio product-custom-option" id="options_42"><span class="label"><label for="options_42">None</label></span></li>
																			<li class="item2"><input type="radio" value="206" class="radio  product-custom-option"><span class="label"><label>2XL <span class="price-notice">+<span class="price">$1.00</span></span></label></span></li>
																			<li><input type="radio" value="207" class="radio  product-custom-option"><span class="label"><label>L <span class="price-notice">+<span class="price">$2.00</span></span></label></span></li>
																			<li><input type="radio" value="209" class="radio  product-custom-option"><span class="label"><label>M <span class="price-notice">+<span class="price">$4.00</span></span></label></span></li>
																			<li><input type="radio" value="208" class="radio  product-custom-option"><span class="label"><label>S <span class="price-notice">+<span class="price">$3.00</span></span></label></span></li>
																			<li><input type="radio" value="210" class="radio  product-custom-option"><span class="label"><label>XL <span class="price-notice">+<span class="price">$5.00</span></span></label></span></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="product-options-bottom">
														<div class="price-box">
															<span class="regular-price">
															<span class="price">$160.00</span>                                    </span>
														</div>
														<div class="add-to-cart">
															<label for="qty">Qty:</label>
															<div class="quantity-controls quantity-minus">minus</div>
															<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">       
															<div class="quantity-controls quantity-plus">plus</div>
															<button onclick="productAddToCartForm.submit(this)" class="button btn-cart  " id="product-addtocart-button" title="Add to Cart" type="button"><span><span>Buy</span></span></button>
														</div>
														<ul class="add-to-links ">
															<li><a class="link-wishlist" onclick="productAddToCartForm.submitLight(this, this.href); return false;" href="#">Wishlist</a></li>
															<li><span class="separator">|</span> <a class="link-compare" href="#">Compare</a></li>
															<li><a href="#" class="email-friend">Email</a></li>
															<li><a href="#" class="print">Print</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="block-buyer-protec col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
									</div>
									<input type="hidden" name="flycart_add" value="1">
								</form>
								<div id="product-tabs">
									<div class="inner">
										<div class="tab-item">
											<ul>
												<li class="active"><a href="#tab7" data-toggle="tab">description</a></li>
												<li><a href="#tab8" data-toggle="tab">reviews</a></li>
												<li><a href="#tab9" data-toggle="tab">Product tags</a></li>
												<li><a href="#tab10" data-toggle="tab">Custome services</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div id="tab7" class="tab-pane active">
												<div class="inner-tab">
													<div id="decription" style="display:block">
														<div class="tab-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<a href="#"><img src="{{ asset('images/banner/ca-b45.png') }}" alt=""></a>
														</div>
														<h2>Details</h2>
														<div class="std">
															<div class="des-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
																<ul>
																	<li><span class="text-left">Gender:</span><span class="text-right">{{ $product->genders->name }}</span></li>
																	<li><span class="text-left">Waistline:</span><span class="text-right">Natural</span></li>
																	<li><span class="text-left">Decoration:</span><span class="text-right">Beading</span></li>
																	<li><span class="text-left">Pattern Type: </span><span class="text-right">Solid</span></li>
																	<li><span class="text-left">Brand Name:</span><span class="text-right">1023</span></li>
																	<li><span class="text-left">Style:</span><span class="text-right">Formal</span></li>
																	<li><span class="text-left">Fabric Type:</span><span class="text-right">Jersey</span></li>
																	<li><span class="text-left">Material:</span><span class="text-right">Polyester</span></li>
																	<li><span class="text-left">Dresses Length:</span><span class="text-right">Above Knee</span></li>
																	<li><span class="text-left">Silhouette:</span><span class="text-right">A-Line</span></li>
																	<li><span class="text-left">Color Style:</span><span class="text-right">Natural Color</span></li>
																	<li><span class="text-left">Model Number:</span><span class="text-right">59</span></li>
																	<li><span class="text-left">Gender:</span><span class="text-right">Women</span></li>
																</ul>
															</div>
															<div class="des-right col-lg-8 col-md-8 col-sm-8 col-xs-12">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
																	Lorem Ipsum has been the industry's standard dummy text ever since the
																	1500s, when an unknown printer took a galley of type and scrambled it to make
																	a type specimen book. It has survived not only five centuries, but also the leap 
																	into electronic typesetting, remaining essentially unchanged. It was popularised
																</p>
																<ul class="item-images">
																	<li><img src="{{ asset('images/banner/ca-b42.png') }}" alt=""></li>
																	<li><img src="{{ asset('images/banner/ca-b43.png') }}" alt=""></li>
																	<li><img src="{{ asset('images/banner/ca-b44.png') }}" alt=""></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="tab8" class="tab-pane">
												<div id="additional">
													<div class="tab-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<a href="#"><img src="{{ asset('images/banner/ca-b46.png') }}" alt=""></a>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<h2>Additional Information</h2>
														<table id="product-attribute-specs-table" class="data-table">
															<colgroup>
																<col span="2">
																<col span="5">
															</colgroup>
															<tbody>
																<tr>
																	<td colspan="2"><strong>Style</strong></td>
																	<td colspan="2" class="data last">No</td>
																</tr>
																<tr>
																	<td colspan="2"><strong>Material</strong></td>
																	<td colspan="2" class="data last">No</td>
																</tr>
																<tr>
																	<td colspan="2"><strong>Color</strong></td>
																	<td colspan="2" class="data last">Orange</td>
																</tr>
																<tr>
																	<td colspan="2"><strong>Occasion</strong></td>
																	<td colspan="2" class="data last">Career</td>
																</tr>
																<tr>
																	<td colspan="2"><strong>Type</strong></td>
																	<td colspan="2" class="data last">Shirts</td>
																</tr>
																<tr>
																	<td colspan="2"><strong>Size</strong></td>
																	<td colspan="2" class="data last">M</td>
																</tr>
																<tr>
																	<td colspan="2"><strong>Length</strong></td>
																	<td colspan="2" class="data last">No</td>
																</tr>
																<tr>
																	<td><strong>Gender</strong></td>
																	<td colspan="2" class="data last">Male</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div id="tab9" class="tab-pane">
												<div id="review">
													<div class="tab-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<a href="#"><img src="{{ asset('images/banner/ca-b47.png') }}" alt=""></a>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div id="customer-reviews" class="box-collateral box-reviews">
															<h2>Customer Reviews</h2>
															<div class="pager">
																<p class="amount">
																	<strong>1 Item(s)</strong>
																</p>
																<div class="limiter">
																	<label>Show</label>
																	<select onchange="setLocation(this.value)">
																		<option selected="selected" value="detail.html?limit=10">
																			10            
																		</option>
																		<option value="detail.html?limit=20">
																			20            
																		</option>
																		<option value="detail.html?limit=50">
																			50            
																		</option>
																	</select>
																	per page    
																</div>
															</div>
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
															<div class="pager">
																<p class="amount">
																	<strong>1 Item(s)</strong>
																</p>
																<div class="limiter">
																	<label>Show</label>
																	<select onchange="setLocation(this.value)">
																		<option selected="selected" value="detail.html?limit=10">
																			10            
																		</option>
																		<option value="detail.html?limit=20">
																			20            
																		</option>
																		<option value="detail.html?limit=50">
																			50            
																		</option>
																	</select>
																	per page    
																</div>
															</div>
															<div class="form-add">
																<h2>Write Your Own Review</h2>
																<form id="review-form" method="post" action="#">
																	<input type="hidden" value="MG4MpXwwnitHheJz" name="form_key">
																	<fieldset>
																		<h3>You're reviewing: <span>Plaid Cotton Shirt-Khaki-M</span></h3>
																		<h4>How do you rate this product? <em class="required">*</em></h4>
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
											</div>
											<div id="tab10" class="tab-pane">
												<div id="tags" class="tab-pane">
													<div class="tab-banner col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<a href="#"><img src="{{ asset('images/banner/ca-b48.png') }}" alt=""></a>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="box-collateral box-tags">
															<h2>Product Tags</h2>
															<form method="get" action="#" id="addTagForm">
																<div class="form-add">
																	<label for="productTagName">Add Your Tags:</label>
																	<div class="input-box">
																		<input type="text" id="productTagName" name="productTagName" class="input-text required-entry">
																	</div>
																	<button onclick="submitTagForm()" class="button" title="Add Tags" type="button">
																	<span>
																	<span>Add Tags</span>
																	</span>
																	</button>
																</div>
															</form>
															<p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="products-grid" id="upsell_pro">
									<div class="inner">
										<div class="block-title">
											<strong><span>Upsell Products</span></strong>
										</div>
										<div class="container-slider">
											<div class="wrap_item">
												<div class="item">
													<div class="inner">
														<div class="item-image">
															<div class="item-image-inner">
																<a title="Elizabeth Knit Top-Pink-M" href="#" class="product-image">
																<img alt="Elizabeth Knit Top-Pink-M" src="{{ asset('images/photo/11.png') }}" class="first_image"> 
																</a>                               
																<div class="item-btn">
																	<div class="btn-wqc">
																		<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																		<span class="tmp">
																		<a style="display:none" href="#"><span>Quick View</span></a>
																		<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																		<a class="link-compare" href="#" title="Add to compare"></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-info">
															<div class="product-name">
																<a href="#">
																Elizabeth Knit Top-Pink-M									</a>
															</div>
															<div class="cate-name">
																<a href="#">
																Default Category									
																</a>
															</div>
															<div class="rating">
																<div class="ratings">
																	<div class="rating-box">
																		<div style="width:100%" class="rating"></div>
																	</div>
																	<span class="amount"><a href="#">1 (vote)</a></span>
																</div>
															</div>
															<div class="wrap-ns-price">
																<div class="price-box">
																	<span class="regular-price">
																	<span class="price">$210.00</span>                                    </span>
																</div>
																<div class="wrap-new-sale">								
																</div>
															</div>
															<a class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="inner">
														<div class="item-image">
															<div class="item-image-inner">
																<a title="Plaid Cotton Shirt-Royal Blue-M" href="#" class="product-image">
																<img alt="Plaid Cotton Shirt-Royal Blue-M" src="{{ asset('images/photo/11.png') }}" class="first_image"> 
																</a>                               
																<div class="item-btn">
																	<div class="btn-wqc">
																		<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																		<span class="tmp">
																		<a style="display:none" href="#"><span>Quick View</span></a>
																		<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																		<a class="link-compare" href="#" title="Add to compare"></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-info">
															<div class="product-name">
																<a href="#">
																Plaid Cotton Shirt-Royal Blue-M									</a>
															</div>
															<div class="cate-name">
																<a href="#">
																Default Category									</a>
															</div>
															<div class="rating">
																<div class="ratings">
																	<div class="rating-box">
																		<div style="width:80%" class="rating"></div>
																	</div>
																	<span class="amount"><a href="#">1 (vote)</a></span>
																</div>
															</div>
															<div class="wrap-ns-price">
																<div class="price-box">
																	<span class="regular-price">
																	<span class="price">$160.00</span>                                    </span>
																</div>
																<div class="wrap-new-sale">
																	<div class="new-item">new</div>
																</div>
															</div>
															<a class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="inner">
														<div class="item-image">
															<div class="item-image-inner">
																<a title="Elizabeth Knit Top-Pink-L" href="#" class="product-image">
																<img alt="Elizabeth Knit Top-Pink-L" src="{{ asset('images/photo/4.png') }}" class="first_image"> 
																</a>                               
																<div class="item-btn">
																	<div class="btn-wqc">
																		<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																		<span class="tmp">
																		<a style="display:none" href="#"><span>Quick View</span></a>
																		<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																		<a class="link-compare" href="#" title="Add to compare"></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-info">
															<div class="product-name">
																<a href="#">
																Elizabeth Knit Top-Pink-L									</a>
															</div>
															<div class="cate-name">
																<a href="#">
																Default Category									</a>
															</div>
															<div class="rating">
																<div class="ratings">
																	<div class="rating-box">
																		<div style="width:93%" class="rating"></div>
																	</div>
																	<span class="amount"><a href="#">1 (vote)</a></span>
																</div>
															</div>
															<div class="wrap-ns-price">
																<div class="price-box">
																	<span class="regular-price">
																	<span class="price">$210.00</span>                                    </span>
																</div>
																<div class="wrap-new-sale">								
																</div>
															</div>
															<a class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="inner">
														<div class="item-image">
															<div class="item-image-inner">
																<a title="Elizabeth Knit Top-Pink-S" href="#" class="product-image">
																<img alt="Elizabeth Knit Top-Pink-S" src="{{ asset('images/photo/2.png') }}" class="first_image"> 
																</a>                               
																<div class="item-btn">
																	<div class="btn-wqc">
																		<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																		<span class="tmp">
																		<a style="display:none" href="#"><span>Quick View</span></a>
																		<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																		<a class="link-compare" href="#" title="Add to compare"></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-info">
															<div class="product-name">
																<a href="#">
																Elizabeth Knit Top-Pink-S									</a>
															</div>
															<div class="cate-name">
																<a href="#">
																Default Category									</a>
															</div>
															<div class="rating">
																<div class="ratings">
																	<div class="rating-box">
																		<div style="width:100%" class="rating"></div>
																	</div>
																	<span class="amount"><a href="#">1 (vote)</a></span>
																</div>
															</div>
															<div class="wrap-ns-price">
																<div class="price-box">
																	<p class="special-price">
																		<span class="price-label">Special Price</span>
																		<span class="price">
																		$100.00                </span>
																	</p>
																	<p class="old-price">
																		<span class="price-label">Regular Price:</span>
																		<span class="price">
																		$210.00            </span>
																	</p>
																</div>
																<div class="wrap-new-sale">
																	<div class="sale-item">
																		52%	
																	</div>
																</div>
															</div>
															<a class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="inner">
														<div class="item-image">
															<div class="item-image-inner">
																<a title="Elizabeth Knit Top-Pink-S" href="#" class="product-image">
																<img alt="Elizabeth Knit Top-Pink-S" src="{{ asset('images/photo/2.png') }}" class="first_image"> 
																</a>                               
																<div class="item-btn">
																	<div class="btn-wqc">
																		<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																		<span class="tmp">
																		<a style="display:none" href="#"><span>Quick View</span></a>
																		<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																		<a class="link-compare" href="#" title="Add to compare"></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-info">
															<div class="product-name">
																<a href="#">
																Elizabeth Knit Top-Pink-S									</a>
															</div>
															<div class="cate-name">
																<a href="#">
																Default Category									</a>
															</div>
															<div class="rating">
																<div class="ratings">
																	<div class="rating-box">
																		<div style="width:100%" class="rating"></div>
																	</div>
																	<span class="amount"><a href="#">1 (vote)</a></span>
																</div>
															</div>
															<div class="wrap-ns-price">
																<div class="price-box">
																	<p class="special-price">
																		<span class="price-label">Special Price</span>
																		<span class="price">
																		$100.00                </span>
																	</p>
																	<p class="old-price">
																		<span class="price-label">Regular Price:</span>
																		<span class="price">
																		$210.00            </span>
																	</p>
																</div>
																<div class="wrap-new-sale">
																	<div class="sale-item">
																		52%	
																	</div>
																</div>
															</div>
															<a  class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
														</div>
													</div>
												</div>
												<!--end item-->
												<!--end item-->
												<!--end item-->
												<!--end item-->
											</div>
											<div class="navslider">
												<a class="prev" href="#"><span>Prev</span></a>
												<a class="next" href="#"><span>Next</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-right col-right-detail sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="block-pre-related">
							<div class="inner">
								<div class="block-title">
									<strong><span>Premium Related Products</span></strong>			
								</div>
								<div class="container-slider">
									<div class="wrap_item products-grid">
										<div class="item">
											<div class="inner">
												<div class="item-image">
													<div class="item-image-inner">
														<a title="Elizabeth Knit Top-Pink-M" href="#" class="product-image">
														<img alt="Elizabeth Knit Top-Pink-M" src="{{ asset('images/photo/11.png') }}"> 
														</a>                              
														<div class="item-btn">
															<div class="btn-wqc">
																<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																<span class="tmp">
																<a style="display:none" href="#"><span>Quick View</span></a>
																<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																<a class="link-compare" href="#" title="Add to compare"></a>
															</div>
														</div>
													</div>
												</div>
												<div class="product-info">
													<div class="product-name">
														<a href="#">Elizabeth Knit Top-Pink-M</a>
													</div>
													<div class="cate-name">
														<a href="#">
														Default Category								</a>
													</div>
													<div class="rating">
														<div class="ratings">
															<div class="rating-box">
																<div style="width:100%" class="rating"></div>
															</div>
															<span class="amount"><a  href="#">1 (vote)</a></span>
														</div>
													</div>
													<div class="wrap-ns-price">
														<div class="price-box">
															<span class="regular-price">
															<span class="price">$210.00</span>                                    </span>
														</div>
														<div class="wrap-new-sale">								
														</div>
													</div>
													<a 
														class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="inner">
												<div class="item-image">
													<div class="item-image-inner">
														<a title="Plaid Cotton Shirt-Royal Blue-M" href="#" class="product-image">
														<img alt="Plaid Cotton Shirt-Royal Blue-M" src="{{ asset('images/photo/11.png') }}"> 
														</a>                              
														<div class="item-btn">
															<div class="btn-wqc">
																<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																<span class="tmp">
																<a style="display:none" href="#"><span>Quick View</span></a>
																<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																<a class="link-compare" href="#" title="Add to compare"></a>
															</div>
														</div>
													</div>
												</div>
												<div class="product-info">
													<div class="product-name">
														<a href="#">Plaid Cotton Shirt-Royal Blue-M</a>
													</div>
													<div class="cate-name">
														<a href="#">
														Default Category								</a>
													</div>
													<div class="rating">
														<div class="ratings">
															<div class="rating-box">
																<div style="width:80%" class="rating"></div>
															</div>
															<span class="amount"><a href="#">1 (vote)</a></span>
														</div>
													</div>
													<div class="wrap-ns-price">
														<div class="price-box">
															<span class="regular-price">
															<span class="price">$160.00</span>                                    </span>
														</div>
														<div class="wrap-new-sale">
															<div class="new-item">new</div>
														</div>
													</div>
													<a class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="inner">
												<div class="item-image">
													<div class="item-image-inner">
														<a title="Elizabeth Knit Top-Pink-L" href="#" class="product-image">
														<img alt="Elizabeth Knit Top-Pink-L" src="{{ asset('images/photo/11.png') }}"> 
														</a>                              
														<div class="item-btn">
															<div class="btn-wqc">
																<a class="link-wishlist" href="#" title="Add to wishlist"></a>
																<span class="tmp">
																<a style="display:none" href="#"><span>Quick View</span></a>
																<a href="#" data-toggle="tooltip" data-placement="left" data-original-title="Quick View" class="vt_quickview_handler"><span>Quick View</span></a></span>
																<a class="link-compare" href="#" title="Add to compare"></a>
															</div>
														</div>
													</div>
												</div>
												<div class="product-info">
													<div class="product-name">
														<a href="#">Elizabeth Knit Top-Pink-L</a>
													</div>
													<div class="cate-name">
														<a href="#">
														Default Category								</a>
													</div>
													<div class="rating">
														<div class="ratings">
															<div class="rating-box">
																<div style="width:93%" class="rating"></div>
															</div>
															<span class="amount"><a href="#">1 (vote)</a></span>
														</div>
													</div>
													<div class="wrap-ns-price">
														<div class="price-box">
															<span class="regular-price">
															<span class="price">$210.00</span>                                    </span>
														</div>
														<div class="wrap-new-sale">								
														</div>
													</div>
													<a class="btn-cart" title="Add to cart"><span>Add to cart</span></a>
												</div>
											</div>
										</div>
									</div>
									<!--end wrap-item-->
								</div>
								<!--end container-slider-->
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
	<!-- End Footer -->
	<script type="text/javascript" src="{{ asset('js/jquery-1.12.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
	<script src="{{ asset('js/jcarousellite_1.0.1.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
</div>	
</body>
</html>