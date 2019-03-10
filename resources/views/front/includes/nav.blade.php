<header class="header">
    <!-- Tob Bar-->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 hidden-lg-down text-col">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="icon-telephone"></i>234-806-846-9071</li>
                        <li class="list-inline-item">support@techbolashop.com</li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <ul class="social-menu list-inline">
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
                <div class="close-btn"><i class="icon-close"></i></div>
                <form action="{{ route('search.results') }}" method="get">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="search_query" id="search" placeholder="What are you looking for?" required>
                        <button type="submit" class="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Navbar Header  -->
            <a href="{{ route('index') }}" class="navbar-brand">
                <i class="fa fa-shopping-basket"></i>
                <span class="text-purple">techBola</span>
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            <!-- Navbar Collapse -->
            <div id="navbarCollapse" class="collapse navbar-collapse">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link active">Home</a>
                    <li class="nav-item"><a href="{{ route('shop') }}" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="#/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Categories<i class="fa fa-angle-down"></i></a>
                        <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                            @foreach($categories as $category)
                            <li><a href="{{ route('category', $category->id) }}" class="dropdown-item">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
                <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
                    <!-- Search Button-->
                    <div class="search"><i class="icon-search"></i></div>
                    <!-- Cart Dropdown-->
                    <div class="cart dropdown show">
                        <a id="cartdetails" href="{{ route('cart.index') }}" class="dropdown-toggle"><i class="icon-cart"></i>
                            <div class="cart-no">{{ Cart::count() }}</div></a>
                        <a href="{{ route('cart.index') }}" class="text-primary view-cart">View Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>