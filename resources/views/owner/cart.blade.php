
@extends('layouts.layout.productlist')

@section('productcontent')
    
   @include('layouts.header.header');


    <!-- Topbar End -->


      @if(session('deletecart'))
                            <div class="alert alert-danger">
                                {{ session('deletecart') }}
                            </div>
                        @endif

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr> 
                            <th> Image</th>
                            <th>Products</th>
                            <th>Total</th>
                            <th>Quantity</th>
                           
                           
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php 
                        $totaprice =0
                         ?>
                        @foreach($cart as $cartatm)

                        <tr>
                             <td><img src="/images/{{$cartatm->image}}" style="width:150px; height: 150px; border-radius: 00px;"  alt="product Image" /></td>
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> {{$cartatm->product_name}}</td>
                            <td class="align-middle">{{$cartatm->price}}(Rs)</td>
                             <td class="align-middle">{{$cartatm->quantity}}</td>
                            
                            
                            <td class="align-middle">
                                 <a class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete This product')" href="{{route('deleteCart',$cartatm->id)}}"><i class="fa fa-times"></i></a>
                             </td>
                        </tr>
                        <?php
         
    $totaprice=  $cartatm->price +  $totaprice;
    


?>
 @endforeach

                       
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form> -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>{{ $totaprice}}(RS)</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5> {{ $totaprice}}(RS)</h5>
                        </div>
                           

                        <a  href="{{ route('checkout') }}" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</a>
                       
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

   @include('layouts.footer.shopfooter');

    <!-- Footer Start -->

    <!-- Footer End -->

@endsection