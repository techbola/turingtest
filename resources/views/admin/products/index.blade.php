@extends('layouts.admin.master')

@section('content')

    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">All Products</h2>
        </div>
    </header>

    <section class="tables">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price ($)</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @forelse($products as $product)

                                            <tr>
                                                <td><img src="{{ asset($product->featured) }}" alt="" height="45"></td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    <a href="{{ route('products.edit', ['id' => $product->id]) }}"><i class="fa fa-edit"></i> Edit</a>
                                                    <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">

                                                        {{ csrf_field() }}

                                                        {{ method_field('DELETE') }}

                                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>

                                                    </form>
                                                </td>
                                            </tr>

                                            @empty
                                                <h4>No Product Uploaded Yet!</h4>

                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </section>

@endsection