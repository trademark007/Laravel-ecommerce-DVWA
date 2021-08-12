@extends('backend.layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @CSRF
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Create new product</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="fullscreen"></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-highlight">
                        <li class="nav-item"><a href="#highlighted-tab1" class="nav-link active" data-toggle="tab">General</a></li>
                        <li class="nav-item"><a href="#highlighted-tab2" class="nav-link" data-toggle="tab">Attributes</a></li>
                        <li class="nav-item"><a href="#highlighted-tab3" class="nav-link" data-toggle="tab">Product Images</a></li>
                        <li class="nav-item"><a href="#highlighted-tab4" class="nav-link" data-toggle="tab">Seo</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="highlighted-tab1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Product Name</label>
                                        <input type="text" class="@error('name') is-invalid @enderror form-control" name="name">

                                        @error('name')
                                            <div class="alert alert-danger invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input type="text" class="@error('name') is-invalid @enderror form-control" name="description">

                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Size</label>
                                        <input type="text" class="@error('name') is-invalid @enderror form-control" name="size">

                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Color</label>
                                        <input type="text" class="@error('description') is-invalid @enderror form-control" name="color">

                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="number" class="@error('price') is-invalid @enderror form-control" name="price">

                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="highlighted-tab2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">CATEGORY</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach($category as $categories)
                                        <option selected>-- select category --</option>
                                        <option value="{{$categories->id}}">{{$categories->name ?? NULL}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">SLUG</label>
                                        <input type="text" class="@error('slug') is-invalid @enderror form-control" name="slug">

                                        @error('slug')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Material</label>
                                        <input type="text" class="@error('material') is-invalid @enderror form-control" name="material">

                                        @error('material')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Weight</label>
                                        <input type="text" class="@error('weight') is-invalid @enderror form-control" name="weight">

                                        @error('weight')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Guarantee</label>
                                        <input type="text" class="@error('guarantee') is-invalid @enderror form-control" name="guarantee">

                                        @error('guarantee')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Stock</label>
                                        <input type="text" class="form-control" name="stock">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="highlighted-tab3">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" id="image"><br>
                                <input type="file" class="form-control" name="image_two" id="image_two"><br>
                                <input type="file" class="form-control" name="image_three" id="image_three"><br>
                                <input type="file" class="form-control" name="image_four" id="image_four"><br>
                                <input type="file" class="form-control" name="image_five" id="image_five">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="highlighted-tab4">
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">SEO TITLE</label>
                                        <input type="text" class="form-control" name="seo_title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">META KEYWORDS</label>
                                        <input type="text" class="form-control" name="meta_keywords">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">META DESCRIPTION</label>
                                        <input type="text" class="form-control" name="meta_description">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Images</label>
                                        <input type="text" class="form-control" name="image">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="card-footer"><button type="submit" class="btn bg-indigo-400"><i class="icon-paperplane"></i> submit</button></div>
            </form>
            </div>
        </div>
    </div>
</div>



@endsection