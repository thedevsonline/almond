
@extends('layouts.layout.customerLayout')

@section('content')
    @include('layouts.header.header');
    

    <!-- Topbar End -->



    <!-- Navbar End -->
 @if(session('cartadd'))
                            <div class="alert alert-success">
                                {{ session('cartadd') }}
                            </div>
                        @endif
                   

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ redirect()->back() }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop Detail</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                          @if($product->image != Null)
                        <div class="carousel-item active">

                            <img class="w-100 h-100" src="/images/{{$product->image}}" alt="Image">
                        </div>
                        @endif
                        
                        @if($product->image1 != Null)
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/images/{{$product->image1}}" alt="Image">
                        </div>
                        @endif
                        @if($product->image2 != Null)
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/images/{{$product->image2}}" alt="Image">
                        </div>
                        @endif
                        @if($product->image3 != Null)
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/images/{{$product->image3}}" alt="Image">
                        </div>
                        @endif
                        @if($product->image4 != Null)
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/images/{{$product->image4}}" alt="Image">
                        </div>
                        @endif
                        @if($product->image5 != Null)
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/images/{{$product->image5}}" alt="Image">
                        </div>
                        @endif
                        @if($product->image6 != Null)
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/images/{{$product->image6}}" alt="Image">
                        </div>
                        @endif
                        
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$product->product_name}}</h3>
                   <div class="d-flex mb-3">
                        <div class=" mt-4 mr-2">
                            @if($product->stock != Null)
                            <span class="btn btn-sm  p-0 btn-primary ">stock</span> {{$product->stock}}
                            @elseif($product->stock <= 0)
                             <span class="btn btn-danger">outstock</span> 

                            @endif

                        </div>
                      
                    </div> Single Item Price
                    <h3 id="singleProductPrice" value="{{$product->product_price}}" class="font-weight-semi-bold mb-4">{{$product->product_price}}</h3>Rs
                    <p class="mb-4">{{$product->short_discription}}</p>


                              @if($product->stock != Null && $product->minmum_sell != Null)
<div class="d-flex align-items-center mb-4 pt-2">
    <form action="{{route('add_cart',$product->id)}}" >
        @csrf
        <div class="input-group quantity mr-3" style="width: 130px;">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-minus" onclick="decrementValue(event)">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
              
                <input class="form-control bg-secondary border-0 px-1 text-center" max="{{$product->stock }}" name="quantity" type="text" min="{{$product->minmum_sell}}"  id="input-value" value="{{$product->minmum_sell}}">
                
                <div class="input-group-append">
                    <button class="btn btn-primary btn-plus" onclick="incrementValue(event)">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>

        <input type="submit" class="btn btn-outline-dark ml-2 mt-2 align-self-center" value="Add ToCart">
    </form>
</div>

@endif


                    <div class="d-flex">
                                        <h4 class=" text-danger  mb-4">Total Price</h4>
                    <h3 id="totalPrice" class=" font-weight-bold ml-4" > </h3>{{$product->totalprice}}Rs
                    </div>

                    <!-- <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                       
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews ({{$reviews->count()}})</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{$product->long_discription}}</p>
                            
                        </div>
                    
                        <div class="tab-pane fade" id="tab-pane-3">
                             @if(session('reviewadded'))
                            <div class="alert alert-success">
                                {{ session('reviewadded') }}
                            </div>
                        @endif
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <h4 class="mb-4">{{$reviews->count()}} review for "{{$product->product_name}}"</h4>
                                    @foreach($reviews as $review)
                                    <div class="media mb-4">
                                        <img src="/images/{{$review->image}}
" alt="Image">
                                        <div class="media-body">
                                            <h6 class="text-primary">{{$review->name}}<small  class="text-muted"> - <i>{{ $review->created_at->format('d M Y') }}
</i></small></h6>
                                           <!--  <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div> -->
                                            <p>{{$review->remark}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                   <!--  <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div> -->
                                    <form action="{{ route('storereview') }}" method="Post">
                                        @csrf
                                        <div class="form-group" >
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" name="reviewremark" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        @if (auth()->user())
                                        Your remark can  impact on sell
                                        @else
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" name="reviewername" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" name="revieweremail" class="form-control" id="email">
                                        </div>
                                        @endif
                                        <div class="form-group mb-0">
                                            <input type="text" style="display:none;" name="productidr" value="{{$product->id}}">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also Like</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Footer Start -->
 
   @include('layouts.footer.shopfooter');
    <!-- Footer End -->


    



<script>
 function incrementValue(event) {
  event.preventDefault();
  var input = document.getElementById('input-value');
  var max = parseInt(input.getAttribute('max'));
  var value = parseInt(input.value);
  if (!isNaN(max) && value >= max) {
    return;
  }
  input.value = value + 1;
}

function decrementValue(event) {
  event.preventDefault();
  var input = document.getElementById('input-value');
  var min = parseInt(input.getAttribute('min'));
  var value = parseInt(input.value);
  if (!isNaN(min) && value <= min) {
    return;
  }
  input.value = value - 1;
}



</script>

   @endsection