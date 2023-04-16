
@extends('layouts.layout.productlist')

@section('productcontent')
    
   @include('layouts.header.header')


    <!-- Topbar End -->


    <!-- Navbar Start -->
@include('layouts.header.shopsubheader')
    <!-- Navbar End -->
 @if(session('cartadd'))
                            <div class="alert alert-success">
                                {{ session('cartadd') }}
                            </div>
                        @endif
                        @if(session('stockun'))
                            <div class="alert alert-danger">
                                {{ session('stockun') }}
                            </div>
                        @endif
                        
 @if(session('cartempty'))
                            <div class="alert alert-warning">
                                {{ session('cartempty') }}
                            </div>
                        @endif

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
   
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
               
                    <a class="breadcrumb-item text-dark" href="{{ redirect()->back()->getTargetUrl() }}">Back</a>                
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
                        <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
          <div class="col-lg-9 col-md-8">
                <div class="row pb-4">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@foreach($products as $product)
    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="/images/{{ $product->image }}"  style="width:250px; height: 300px; "alt="Product Image">
                <div class="product-action">


                    <form action="{{route('add_cart',$product->id)}}" >
        @csrf
       
                
                <input class="form-control bg-secondary border-0 px-1 text-center" style="display: none;" max="{{$product->stock }}" name="quantity" type="text" min="{{$product->minmum_sell}}" id="input-value" value="{{$product->minmum_sell}}">
             
        

        <input type="submit" class="btn btn-outline-dark "  value="Add ToCart">
    </form>
                   
                    <a class="btn btn-outline-dark " href="{{ route('productdetail',$product->id) }}">Detalis</a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="">{{ $product->product_name }}</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    @if($product->discountprice!=null)
                        <h6 class="text-muted ml-2"><del>{{ $product->product_price }}</del></h6>
                    @endif
                    <h5>{{ $product->product_price }}</h5>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small>(99)</small>
                </div>
            </div>
        </div>
    </div>
@endforeach


             
                    <!-- <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->

   @include('layouts.footer.shopfooter');

    <!-- Footer End -->


    
@endsection