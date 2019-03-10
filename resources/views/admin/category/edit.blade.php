@extends('layouts.admin.master')

@section('content')

    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Category</h2>
        </div>
    </header>

    <!-- Forms Section-->
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Edit Category</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('categories.update', ['id' => $category->id]) }}">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="text" placeholder="Category Name" name="name" value="{{ $category->name }}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection