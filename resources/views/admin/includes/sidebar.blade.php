<nav class="side-navbar">
    <ul class="list-unstyled">
        <li><a href="{{ route('admin.index') }}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Categories </a>
            <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="{{ route('categories.create') }}">New Category</a></li>
                <li><a href="{{ route('categories.index') }}">All Categories</a></li>
            </ul>
        </li>
        <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-shopping-bag"></i>Products </a>
            <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="{{ route('products.create') }}">New Product</a></li>
                <li><a href="{{ route('products.index') }}">All Products</a></li>
            </ul>
        </li>
    </ul>
</nav>