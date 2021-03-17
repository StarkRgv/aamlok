@extends('seller.layout.app')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="page-header">
<div class="row">
    <div class="col-lg-6">
        <div class="page-header-left">
            <h3>Add Products
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
<h5>Add Product</h5>
</div>
<div class="card-body">
<div class="row product-adding">
{{-- <div class="col-xl-5">
<div class="add-product">
    <div class="row">
        <div class="col-xl-9 xl-50 col-sm-6 col-9">
            <img src="../assets/images/pro3/1.jpg" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">
        </div>
        <div class="col-xl-3 xl-50 col-sm-6 col-3">
            <ul class="file-upload-product">
                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
            </ul>
        </div>
    </div>
</div>
</div> --}}
<div class="col-xl-7">
<form action="{{  route('store.product') }}" method="POST" class="needs-validation add-product-form" novalidate="" enctype="multipart/form-data">
    @csrf
    <div class="form">
        <div class="form-group row">
            <label for="category_id" class="col-xl-3 col-sm-4 mb-0"> Category :</label>
            <select class="form-control digits col-xl-8 col-sm-7" id="category_id" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="subCategory_id" class="col-xl-3 col-sm-4 mb-0">Sub-Category :</label>
            <select class="form-control digits col-xl-8 col-sm-7" id="subCategory_id" name="sub_category_id">
                @foreach($subCategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->sub_category }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="subCategory_id" class="col-xl-3 col-sm-4 mb-0">Gender :</label>
            <select class="form-control @error('gender') is-invalid @enderror digits col-xl-8 col-sm-7" id="gender" name="gender">
                @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3 row">
            <label for="title" class="col-xl-3 col-sm-4 mb-0">Product Name :</label>
            <input class="form-control @error('title') is-invalid @enderror col-xl-8 col-sm-7" id="title" type="text" name="title" required>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
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
            <input class="form-control  @error('brand_name') is-invalid @enderror col-xl-8 col-sm-7" id="brand_name" type="text" name="brand_name" required>
                        @error('brand_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="style_name" class="col-xl-3 col-sm-4 mb-0">Style Name :</label>
            <input class="form-control @error('style_name') is-invalid @enderror col-xl-8 col-sm-7 " id="style_name" type="text" name="style_name" required>
                        @error('style_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="department" class="col-xl-3 col-sm-4 mb-0 ">Department:</label>
            <input class="form-control @error('department') is-invalid @enderror col-xl-8 col-sm-7 " id="department" type="text" name="department" required>
                        @error('department')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="pattern" class="col-xl-3 col-sm-4 mb-0">Pattern:</label>
            <input class="form-control @error('pattern') is-invalid @enderror col-xl-8 col-sm-7" id="pattern" type="text" name="pattern" required>
                        @error('pattern')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="rise_style" class="col-xl-3 col-sm-4 mb-0">Rise Style:</label>
            <input class="form-control @error('rise_style') is-invalid @enderror col-xl-8 col-sm-7" id="rise_style" type="text" name="rise_style" required>
                        @error('rise_style')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="fitting_type" class="col-xl-3 col-sm-4 mb-0">Fitting Type:</label>
            <input class="form-control @error('fitting_type') is-invalid @enderror col-xl-8 col-sm-7" id="fitting_type" type="text" name="fitting_type" required>
                        @error('fitting_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="fabric_type" class="col-xl-3 col-sm-4 mb-0">Fabric Type:</label>
            <input class="form-control @error('fabric_type') is-invalid @enderror col-xl-8 col-sm-7" id="fabric_type" type="text" name="fabric_type" required>
                        @error('fabric_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="origin_country" class="col-xl-3 col-sm-4 mb-0">Country of Origin:</label>
            <input class="form-control @error('origin_country') is-invalid @enderror col-xl-8 col-sm-7" id="origin_country" type="text" name="origin_country" required>
                        @error('origin_country')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>

        <div class="form-group mb-3 row">
            <label for="mrp" class="col-xl-3 col-sm-4 mb-0">MRP:</label>
            <input class="form-control @error('mrp') is-invalid @enderror col-xl-8 col-sm-7" id="mrp" type="text" name="mrp" required>
                        @error('mrp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="selling_price" class="col-xl-3 col-sm-4 mb-0">Selling Price:</label>
            <input class="form-control @error('selling_price') is-invalid @enderror col-xl-8 col-sm-7" id="selling_price" type="text" name="selling_price" required>
                        @error('selling_price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group mb-3 row" id="customFields">
            <label for="selling_price" class="col-xl-3 col-sm-4 mb-0">Variation:</label>
            <div class="row col-xl-9 col-sm-8">
                <select class="form-control digits col-xl-4 col-sm-3 p-2" id="size" name="size[]">
                <option value="" selected disabled>Select Size</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra-Large">Extra-Large</option>
            </select> &nbsp;
            <select class="form-control digits col-xl-3 col-sm-3 p-2" id="colors" name="colors[]">
                <option value="" selected disabled>Select Color</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Blue">Blue</option>
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Yellow">Yellow</option>
                <option value="Purple">Purple</option>
                <option value="Violet">Violet</option>
                <option value="Pink">Pink</option>
                <option value="Rose">Rose</option>
                <option value="Brown">Brown</option>
            </select> &nbsp;
            <input class="form-control col-xl-3 col-sm-2" id="quantity" type="text" name="quantity[]">
            <a href="javascript:void(0);" class="addCF">Add</a>
        </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>                                                
    <script type="text/javascript">
        $(document).ready(function(){
        var i = 0;
        $(".addCF").click(function(){
        i++;
        var id ="customFields_"+i;

        $("#customFields").append('<label for="selling_price" class="col-xl-3 col-sm-4 mb-0"></label><div class="row col-xl-9 col-sm-8" id="' +id+'"><select class="form-control digits col-xl-3 col-sm-3 p-2" id="size" name="size[]"><option value="" selected disabled>Select Size</option><option value="Small">Small</option><option value="Medium">Medium</option><option value="Large">Large</option><option value="Extra-Large">Extra-Large</option> </select>&nbsp; <select class="form-control digits col-xl-3 col-sm-3 p-2" id="colors" name="colors[]"><option value="" selected disabled>Select Color</option><option value="White">White</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Red">Red</option><option value="Green">Green</option><option value="Yellow">Yellow</option><option value="Purple">Purple</option><option value="Violet">Violet</option><option value="Pink">Pink</option> <option value="Rose">Rose</option><option value="Brown">Brown</option></select>&nbsp; <input class="form-control col-xl-2 col-sm-2" id="quantity" type="text" name="quantity[]"> &nbsp; <a href="javascript:void(0);" class="btn_remove" id="' +i+'">Remove</a></div>');
        });

        $(document).on('click', '.btn_remove', function(){  
        var button_id = $(this).attr("id");   
        $('#customFields_'+button_id+'').remove();  
        });  
    });
    </script>

        <div class="form-group mb-3 row">
            <label for="order_quantity" class="col-xl-3 col-sm-4 mb-0">Max Order Quantity:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
            <div class="input-group">
            <input class="touchspin  @error('order_quantity') is-invalid @enderror" id="order_quantity" type="text" name="order_quantity" value="1" required>
                        @error('order_quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            </fieldset>
        </div>
        <div class="form-group mb-3 row">
            <label for="in_stock" class="col-xl-3 col-sm-4 mb-0">In Stock:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
            <div class="input-group">
            <input class="touchspin @error('in_stock') is-invalid @enderror" id="in_stock" type="text" name="in_stock" value="1" required>
                        @error('in_stock')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            </fieldset>
        </div>
        <div class="form-group mb-3 row">
            <label for="pocket_count" class="col-xl-3 col-sm-4 mb-0">Number of Pockets:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
            <div class="input-group">
            <input class="touchspin  @error('pocket_count') is-invalid @enderror" id="pocket_count" type="text" name="pocket_count" value="1" required>
                        @error('pocket_count')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </fieldset>
        </div>
        <div class="form-group mb-3 row">
            <label for="unit_count" class="col-xl-3 col-sm-4 mb-0">Unit Count:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                <div class="input-group">
            <input class="touchspin  @error('unit_count') is-invalid @enderror" id="unit_count" type="text" name="unit_count" value="1" required>
                        @error('unit_count')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                </fieldset>

        </div>
        <div class="form-group mb-3 row">
            <label for="manufacturer" class="col-xl-3 col-sm-4 mb-0">Manufacturer:</label>
            <input class="form-control @error('manufacturer') is-invalid @enderror col-xl-8 col-sm-7" id="manufacturer" type="text" name="manufacturer" required>
                        @error('manufacturer')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Product Care Instructions :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" name="care_instructions" class="form-control  @error('care_instructions') is-invalid @enderror" cols="92" rows="4"></textarea>
                        @error('care_instructions')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Occasion Instructions :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('occasion_instructions') is-invalid @enderror" name="occasion_instructions" cols="92" rows="4"></textarea>
                        @error('occasion_instructions')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Material Composition :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('material_composition') is-invalid @enderror" name="material_composition" cols="92" rows="4"></textarea>
                        @error('material_composition')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Item Length Description :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('item_length_desc') is-invalid @enderror" name="item_length_desc" cols="92" rows="4"></textarea>
                        @error('item_length_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Product Description :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('product_desc') is-invalid @enderror" name="product_desc" cols="92" rows="4"></textarea>
                        @error('product_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Key Features :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('key_feature') is-invalid @enderror" name="key_feature" cols="92" rows="4"></textarea>
                        @error('key_feature')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
        </div>
        <div class="input-group mb-3 row">
            <label class="col-xl-3 col-sm-4" for="inputGroupFile02">Gallery Images</label>
            <div class="col-xl-8 col-sm-7 pl-0  custom-file">
            <input type="file" class="" id="inputGroupFile02" name="file[]" multiple="multiple">
            </div>
        </div>

        

        {{-- <div class="form-group mb-3 row">
            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>
            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="text" required="">
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="form-group mb-3 row">
            <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Product Code :</label>
            <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="text" required="">
            <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
        </div>
    </div>
    <div class="form">
        <div class="form-group row">
            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Size :</label>
            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
            </select>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4 mb-0">Total Products :</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                <div class="input-group">
                    <input class="touchspin" type="text" value="1">
                </div>
            </fieldset>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Add Description :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
            </div>
        </div> --}}
    </div>
    <div class="offset-xl-3 offset-sm-4">
        <button type="submit" class="btn btn-primary">Add</button>
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
            <!-- Container-fluid Ends-->


@push('scripts')
    
@endpush

@endsection
