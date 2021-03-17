@extends('seller.layout.app')

@section('content')
	<!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product List
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                	@forelse($products as $product)
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#"><img src="{{ asset('storage/'.$product->image->file_path) }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="{{ route('product.detail', ['product' =>$product]) }}">
                                        <h6>{{ $product->title }}</h6>
                                    </a>
                                    <h4>Rs.{{ $product->selling_price }}<del>/Rs.{{ $product->mrp }}</del></h4>
                                    <ul class="color-variant">
                                        <li class="bg-light0"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-light2"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <h1>No data Available.</h1>
                    @endforelse
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
@endsection