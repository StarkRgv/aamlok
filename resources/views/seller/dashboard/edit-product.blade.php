@extends('seller.layout.app')

@section('content')
@if (session()->has('success'))
    @component('components.notify-msg', ['class' => 'bg-success'])
      @slot('message')
        {{ session('success') }}
      @endslot
    @endcomponent
  @endif
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="page-header">
<div class="row">
    <div class="col-lg-6">
        <div class="page-header-left">
            <h3>Edit Product
                <small>Multikart Admin panel</small>
            </h3>
        </div>
    </div>
    <div class="col-lg-6">
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Physical</li>
            <li class="breadcrumb-item active">Add Product</li>
        </ol>
    </div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Edit Product</h5>
<a href="{{ route('product.variation', ['product' => $product->id ]) }}" class="pull-right btn btn-primary">Variation <i class="fa fa-pencil" aria-hidden="true"></i></a>
</div>
<div class="card-body">
<div class="row product-adding">
<div class="col-xl-7">
<form action="{{  route('update.product', ['product' => $product]) }}" method="POST" class="needs-validation add-product-form" novalidate="" enctype="multipart/form-data">
    @csrf
    <div class="form">
        <div class="form-group row">
            <label for="category_id" class="col-xl-3 col-sm-4 mb-0"> Category :</label>
            <select class="form-control digits col-xl-8 col-sm-7" id="category_id" name="category_id">
                <option disabled selected>Select Category</option>
                @foreach($categories as $category)
                <option {{ $product->category_id === $category->id? 'selected' : '' }}  value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="subCategory_id" class="col-xl-3 col-sm-4 mb-0">Sub-Category :</label>
            <select class="form-control digits col-xl-8 col-sm-7" id="subCategory_id" name="sub_category_id">
                <option disabled selected>Select Sub-Category</option>
                @foreach($subCategories as $subcategory)
                <option {{ $product->sub_category_id  === $subcategory->id? 'selected' : '' }} value="{{ $subcategory->id }}">{{ $subcategory->sub_category }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="subCategory_id" class="col-xl-3 col-sm-4 mb-0">Gender :</label>
            <select class="form-control @error('gender') is-invalid @enderror digits col-xl-8 col-sm-7" id="gender" name="gender">
                <option disabled selected>Select Gender</option>
                @foreach($genders as $gender)
                <option {{ $product->gender_id   === $gender->id? 'selected' : '' }} value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3 row">
            <label for="title" class="col-xl-3 col-sm-4 mb-0">Product Name :</label>
            <input class="form-control @error('title') is-invalid @enderror col-xl-8 col-sm-7" id="title" type="text" name="title" value="{{ $product->title }}" >
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="input-group mb-3 row">
            <label class="col-xl-3 col-sm-4" for="inputGroupFile02">Primary Image</label>
            <div class="col-xl-8 col-sm-7 pl-0 custom-file">
            <input type="file" class="" id="inputGroupFile02" name="primary_image">
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label for="brand_name" class="col-xl-3 col-sm-4 mb-0">Brand Name :</label>
            <select class="form-control digits col-xl-8 col-sm-7" id="brand_name" name="brand_name">
                <option disabled selected>Select Brand</option>
                @foreach($brands as $brand)
                <option {{ $product->brand_name   === $brand->id? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->brand }}</option>
                @endforeach
            </select>
                @error('brand_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="style_name" class="col-xl-3 col-sm-4 mb-0">Style Name :</label>
            <input class="form-control @error('style_name') is-invalid @enderror col-xl-8 col-sm-7 " id="style_name" type="text" name="style_name" value="{{ $product->style_name }}" required>
                        @error('style_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="department" class="col-xl-3 col-sm-4 mb-0 ">Department:</label>
            <input class="form-control @error('department') is-invalid @enderror col-xl-8 col-sm-7 " id="department" type="text" name="department" value="{{ $product->department }}" required>
                        @error('department')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="pattern" class="col-xl-3 col-sm-4 mb-0">Pattern:</label>
            <input class="form-control @error('pattern') is-invalid @enderror col-xl-8 col-sm-7" id="pattern" type="text" name="pattern" value="{{ $product->pattern }}" required>
                        @error('pattern')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="rise_style" class="col-xl-3 col-sm-4 mb-0">Rise Style:</label>
            <input class="form-control @error('rise_style') is-invalid @enderror col-xl-8 col-sm-7" id="rise_style" type="text" name="rise_style" value="{{ $product->rise_style }}" required>
                        @error('rise_style')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="fitting_type" class="col-xl-3 col-sm-4 mb-0">Fitting Type:</label>
            <input class="form-control @error('fitting_type') is-invalid @enderror col-xl-8 col-sm-7" id="fitting_type" type="text" name="fitting_type" value="{{ $product->fitting_type }}" required>
                        @error('fitting_type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="fabric_type" class="col-xl-3 col-sm-4 mb-0">Fabric Type:</label>
            <input class="form-control @error('fabric_type') is-invalid @enderror col-xl-8 col-sm-7" id="fabric_type" type="text" name="fabric_type" value="{{ $product->fabric_type }}" required>
                        @error('fabric_type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="origin_country" class="col-xl-3 col-sm-4 mb-0">Country of Origin:</label>
            <input class="form-control @error('origin_country') is-invalid @enderror col-xl-8 col-sm-7" id="origin_country" type="text" name="origin_country" value="{{ $product->origin_country }}" required>
                        @error('origin_country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>

        <div class="form-group mb-3 row">
            <label for="mrp" class="col-xl-3 col-sm-4 mb-0">MRP:</label>
            <input class="form-control @error('mrp') is-invalid @enderror col-xl-8 col-sm-7" id="mrp" type="text" name="mrp" value="{{ $product->mrp }}" required>
                        @error('mrp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="selling_price" class="col-xl-3 col-sm-4 mb-0">Selling Price:</label>
            <input class="form-control @error('selling_price') is-invalid @enderror col-xl-8 col-sm-7" id="selling_price" type="text" name="selling_price" value="{{ $product->selling_price }}" required>
                        @error('selling_price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="order_quantity" class="col-xl-3 col-sm-4 mb-0">Max Order Quantity:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
            <div class="input-group">
            <input class="touchspin  @error('order_quantity') is-invalid @enderror" id="order_quantity" type="text" name="order_quantity" value="{{ $product->order_quantity }}" required>
                        @error('order_quantity')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
            </fieldset>
        </div>
        <div class="form-group mb-3 row">
            <label for="pocket_count" class="col-xl-3 col-sm-4 mb-0">Number of Pockets:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
            <div class="input-group">
            <input class="touchspin  @error('pocket_count') is-invalid @enderror" id="pocket_count" type="text" name="pocket_count" value="{{ $product->pocket_count }}" required>
                        @error('pocket_count')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </fieldset>
        </div>
        <div class="form-group mb-3 row">
            <label for="unit_count" class="col-xl-3 col-sm-4 mb-0">Unit Count:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                <div class="input-group">
            <input class="touchspin  @error('unit_count') is-invalid @enderror" id="unit_count" type="text" name="unit_count" value="{{ $product->unit_count }}" required>
                        @error('unit_count')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                </fieldset>

        </div>
        <div class="form-group mb-3 row">
            <label for="manufacturer" class="col-xl-3 col-sm-4 mb-0">Manufacturer:</label>
            <input class="form-control @error('manufacturer') is-invalid @enderror col-xl-8 col-sm-7" id="manufacturer" type="text" name="manufacturer" value="{{ $product->manufacturer }}" required>
                        @error('manufacturer')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Product Care Instructions :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" name="care_instructions" class="form-control  @error('care_instructions') is-invalid @enderror" cols="92" rows="4">{{ $product->care_instructions }}</textarea>
                        @error('care_instructions')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Occasion Instructions :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('occasion_instructions') is-invalid @enderror" name="occasion_instructions" cols="92" rows="4">{{ $product->occasion_instructions }}</textarea>
                        @error('occasion_instructions')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Material Composition :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('material_composition') is-invalid @enderror" name="material_composition" cols="92" rows="4">{{ $product->material_composition }}</textarea>
                        @error('material_composition')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Item Length Description :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('item_length_desc') is-invalid @enderror" name="item_length_desc" cols="92" rows="4">{{ $product->item_length_desc }}</textarea>
                        @error('item_length_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Product Description :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('product_desc') is-invalid @enderror" name="product_desc" cols="92" rows="4">{{ $product->product_desc }}</textarea>
                        @error('product_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Key Features :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('key_feature') is-invalid @enderror" name="key_feature" cols="92" rows="4">{{ $product->key_feature }}</textarea>
                        @error('key_feature')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="input-group mb-3 row">
            <label class="col-xl-3 col-sm-4" for="inputGroupFile02">Gallery Images</label>
            <div class="col-xl-8 col-sm-7 pl-0  custom-file">
            <input type="file" class="" id="inputGroupFile02" name="file[]" multiple="multiple">
            </div>
        </div>
    </div>
    <div class="offset-xl-3 offset-sm-4">
        <button type="submit" class="btn btn-primary">Next</button>
        <button type="button" class="btn btn-light">Discard</button>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="{{ asset('seller/js/jquery-3.3.1.min.js') }}"></script>
<script>
$(".notification").animate({right: '40px'});
          setTimeout(function(){
          $('.notification').slideUp(1000)}, 2500);
</script>
<!-- Container-fluid Ends-->



@endsection
