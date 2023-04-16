
@extends('layouts.layout.productlist')

@section('productcontent')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">khotjaya na hwy ty</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<div >
   
    <!-- Checkout Start -->
 <form >
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-light pr-3">Become a Seller</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" name="firstName" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" name="lastName" type="text" placeholder="Doe">
                        </div>
                       <!--  <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="" type="text" placeholder="example@email.com">
                        </div> -->
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" name="phoneNumber" name="" type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" name="address" name="" type="text" placeholder="123 Street">
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select">
                                <option selected>Pakistan</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" name="city" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Province</label>
                            <input class="form-control" name="" type="text" placeholder="New York">
                        </div>
                        <!-- <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" name="" type="text" placeholder="123">
                        </div> -->
                       <!--  <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input name="" type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                        </div> -->
                       <!--  <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input name="" type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 1</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 2</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Product Name 3</p>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$160</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        
                       
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input name="" type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Cash On Delivery</label>
                            </div>
                        </div>
                        <input name="" type="submit" value="Place Order" class="btn btn-block btn-primary font-weight-bold py-3">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</div>

    <!-- Checkout End -->


    <!-- Footer Start -->
   
    <!-- Footer End -->

@endsection



