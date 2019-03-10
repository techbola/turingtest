@extends('layouts.admin.master')

@section('content')

    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Product</h2>
        </div>
    </header>

    <!-- Forms Section-->
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-close">
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Create Product</h3>
                        </div>
                        <div class="card-body">

                            @include('admin.includes.errors')

                            <form class="form-horizontal" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Product Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Category</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" class="form-control mb-3" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label for="fileInput" class="col-sm-3 form-control-label">Image</label>
                                    <div class="col-sm-9">
                                        <input id="featured" name="featured" type="file" class="form-control-file" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="price" value="{{ old('price') }}" required>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-3 form-control-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="description" name="description" class="summernote" required>{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-3">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection