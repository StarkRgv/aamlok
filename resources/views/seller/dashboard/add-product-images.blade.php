@extends('seller.layout.app')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Category
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Physical</li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Product Gallery Images</h5>
                    <a href="{{ route('product.variation', ['product' => $product->id ]) }}" class="pull-right btn btn-primary ml-3">Variation <i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ route('edit.product', ['product' => $product]) }}" class="pull-right btn btn-primary">Product <i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.images', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3 row">
                            <div class="col-xl-8 col-sm-7 pl-3  custom-file">
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="" name="file[]" multiple="multiple" accept="image/jpg, image/jpeg" >
                            </div>
                        </div>
                            @error('file')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($images as $key => $image)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $image->name }}</td>
                            <td><img style="height: 5rem" src="{{ url('../storage/app/public/'.$image->file_path) }}"alt="{{ $image->name }}"></td>
                            <td>
                                <form action="{{ route('destroy.image', ['image' => $image]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <h4>No Images Uploaded </h4>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Add Product Variation Images</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.variaion.images', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach ($uniqueColors as $key => $color)
                        <h4>{{ $color->colors->color }}</h4>
                        <div class="row mt-3">
                            <div class="col-xl-6 col-sm-6 ">
                                <div class="input-group mb-3 row">
                                    <div class="pl-3 custom-file">
                                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="image[]">
                                        <input type="hidden" name="color_id[]" value="{{ $color->color }}">
                                    </div>
                                    @error('file')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 ">
                                @foreach ($variationImages as $v_image)
                                @if ($color->color == $v_image->color_id)
                                <div class="pull-right">
                                    <img style="height: 5rem" src="{{ url('../storage/app/public/'.$v_image->file_path) }}"alt="{{ $v_image->file_name }}">
                                </div>
                                @endif
                                @endforeach
                            </div>

                        </div>
                        <hr>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
