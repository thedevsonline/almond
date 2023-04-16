<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="background-color: inherit; cursor: default;" href="#">Almonds</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="background-color: inherit; cursor: default;"
                        href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="background-color: inherit; cursor: default;"
                        href="{{ route('productlist') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="background-color: inherit; cursor: default;" href="#">About</a>
                </li>
            </ul>
            <form class="my-2 mx-2 d-flex " style="width: 100%;">
                <input class="form-control ml-5 mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                    style="width: 100%;">
                <button class="btn  my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav mr-4 ml-auto">
                <li class="nav-item">
  @if (auth()->user())
                    <a class=" btn btn-outline-dark  mr-sm-2" >{{Auth::user()->role}}</a>
                    @endif
                </li>
                 <li class="nav-item">

                    <a class=" btn btn-outline-danger mr-sm-2" href="{{ route('admin.Home') }}">Become a Seller</a>
                </li>
                @if (auth()->user())
                    <div class=" d-flex fixed  sm:block">

                        <a href='{{ route('index') }}'
                           class="btn btn-outline-dark">Home</a>
                        <a href='{{ route('logout') }}'
                            class="btn btn-outline-warning">Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark">Log
                            in</a>

                        @if (Route::has('signup'))
                            <a href="{{ route('signup') }}"
                               class="btn btn-outline-primary">Register</a>
                        @endif

                    </div>
                @endif

                <li class="nav-item">
                    <a class="btn btn-outline-success"  href="{{ route('cart') }}">Cart</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
