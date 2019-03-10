@extends('layouts.admin.master')

@section('content')

    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Dashboard</h2>
        </div>
    </header>
    <!-- Dashboard Counts Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-violet"><i class="icon-padnote"></i></div>
                        <div class="title"><span>All Categories</span>
                        </div>
                        <div class="number"><strong>{{ $categories->count() }}</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-red"><i class="icon-padnote"></i></div>
                        <div class="title"><span>All Products</span>
                        </div>
                        <div class="number"><strong>{{ $products->count() }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection