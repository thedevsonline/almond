<header >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="background-color: inherit; cursor: default;" href="#">Almonds</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="background-color: inherit; cursor: default;" href="{{ route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="background-color: inherit; cursor: default;" href="{{ route('productlist')}}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="background-color: inherit; cursor: default;" href="#">About</a>
                </li>
            </ul>
             <form class="my-2 mx-2 d-flex "  style="width: 100%;">
  <input class="form-control ml-5 mr-sm-2"  type="search" placeholder="Search" aria-label="Search" style="width: 100%;">
  <button class="btn  my-2 my-sm-0" type="submit">Search</button>
</form>

            <ul class="navbar-nav mr-4 ml-auto">
                 <li class="nav-item">
                    <a class=" btn btn-outline-danger mr-sm-2" href="{{route('OwnerHome)}}">Become a Seller</a>
                </li>
                @if(auth()->user())
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    
                        <a href='{{ route("user.index") }}' class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                         <a href='{{ route("logout") }}' class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
                @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('signup'))
                            <a href="{{ route('signup') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    
                </div>
            @endif
                  
                <li class="nav-item">
                    <a class="nav-link" style="background-color: inherit; cursor: default;" href="#">Cart</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
