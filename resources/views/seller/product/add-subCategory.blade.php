@extends('seller.layout.app')

@section('content')
<!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Sub Category
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

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Sub Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Sub Category</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Sub Category</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="{{ route('sub-category.store') }}" method="POST">
                                                        @csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1 @error('sub_category') is-invalid @enderror">Sub Category :</label>
                                                                <input class="form-control" id="validationCustom01" type="text" name="sub_category" value="" required>
                                                                @error('sub_category')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Category :</label>
                                                                <select name="category_id" class="form-control">
                                                                    @foreach($categories as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
        <div class="form-group">
        <label for="category_id">Select Gander :</label>
        <select class="form-control @error('gender') is-invalid @enderror" id="category_id" name="gender">
            @foreach($genders as $gender)
            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>
        @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    </div>
                                                            {{-- <div class="form-group mb-0">
                                                                <label for="validationCustom02" class="mb-1">Category Image :</label>
                                                                <input class="form-control" id="validationCustom02" type="file">
                                                            </div> --}}
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical"></div>
                                </div> --}}
                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Category</th>
                                      <th scope="col">Sub Category</th>
                                      <th scope="col">Gender</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($subCategories as $subcategory)
                                    <tr>
                                      <th scope="row">{{ $subcategory->id }}</th>
                                      <td>{{ $subcategory->category->category }}</td>
                                      <td>{{ $subcategory->sub_category }}</td>
                                      <td>{{ $subcategory->genders->name }}</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
@endsection
