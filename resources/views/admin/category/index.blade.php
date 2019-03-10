@extends('layouts.admin.master')

@section('content')

    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">All Categories</h2>
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
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse($categories as $category)

                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <a href="{{ route('categories.edit', ['id' => $category->id]) }}"><i class="fa fa-edit"></i> Edit</a>
                                                    <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="post">

                                                        {{ csrf_field() }}

                                                        {{ method_field('DELETE') }}

                                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>

                                                    </form>
                                                </td>
                                            </tr>

                                        @empty
                                            <h4>No Category Added Yet!</h4>

                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection