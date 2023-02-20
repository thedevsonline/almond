@extends('layouts.layout.customerLayout')

@section('admincontent')
      <div class="container-scroller">
         <!-- partial:../../partials/_sidebar.html -->
         @include('layouts.sidebar.ownerSidebar')
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            @include('layouts.header.ownerheader')
            <!-- partial -->
            <div class="main-panel">
               <div class="content-wrapper">
                  <div class="row">
                     <div class="col-9">
                        <h1>Add New Product</h1>
                        <form action="{{route('storeProduct')}}">
                           <div class="card">
                              <input class=" form-control-lg bg-white  productName"  type="text" placeholder="Product Name">
                           </div>
                           <div class="card">
                              <textarea class="form-control-lg bg-white productDes"  id="Write Product Description" placeholder="Write Product description"></textarea>
                           </div>
                           <div class="card  d-flex">
                              <div class="card-header bg-white">
                                 <span class="dataHeader">Product Data</span>
                              </div>
                              <div class="card-body col-12 div-ul-data d-flex">
                                 <ul class="ul-data">
                                    <li id="li-general" onclick="showDiv('div1')" class="li-button">General</li>
                                    <li id="li-shipping" onclick="showDiv('div2')" class="li-button">shipping</li>
                                    <li  id="li-inventory" onclick="showDiv('div3')" class="li-button">Inventory</li>
                                    <li id="li-image" onclick="showDiv('div4')" class="li-button">Images</li>
                                 </ul>
                                 <div id ="div1" class="data-informantion ">
                                    <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Single Product Price(Rs)</p>
                                       <input type="text" class ="singleproduct" placeholder="1000" name="singleProductPrice">
                                    </div>
                                    <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Min. Number For Sell</p>
                                       <input type="" class ="singleproduct" name="numberOfSell" placeholder="1,2,3....">
                                    </div>
                                   
                                 </div>
                                 <div id ="div2" class="data-informantion">
                                      <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Weight</p>
                                        <input type="text" class ="singleproduct" placeholder="10,11,12...." name="weight">
                                      
                                    </div>
                                    <div class="general mt-4 d-flex justify-content-between">
                                       <p class="singleProduct ">Dimensions(ft)</p>
                                        <input type="text" class ="weight" name="Length" placeholder="Length">
                                       <input type="text" class ="weight" name="Widht" placeholder="Widht">
                                       <input type="text" class ="weight" name="height" placeholder="Height">
                                      
                                    </div>
                                 </div>
                                 <div id ="div3" class="data-informantion">

                                   <div class="general d-flex justify-content-between">
                                     <p class="singleProduct ">Is Stock</p>

                                  <select class ="singleproduct">
                                    <option>In Stock</option>
                                    <option>Out Stock</option>
                                  </select>
                                  
                                </div>
                                <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Stock quantity</p>
                                       <input type="number" class ="singleproduct" name="numberOfSell" placeholder="100,200,300....">
                                    </div>
                                 </div>
                                 <div id ="div4" class="data-informantion">
                                        
                                   <div class="general d-flex justify-content-between">
                                     <p class="singleProduct ">Product Image</p>
                                      <input type="file" class ="singleproduct" name="image" >
                                  
                                </div>
                                <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Product Gallery</p>
                                       <div >
                                       <input type="file" class ="singleproduct" name="image1" >
                                       <input type="file" class ="singleproduct" name="image2" >
                                       <input type="file" class ="singleproduct" name="image3" >
                                       <input type="file" class ="singleproduct" name="image4" >
                                       <input type="file" class ="singleproduct" name="image5" >
                                     </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="card">

                              <textarea class="form-control-lg bg-white productDes"  id="Write Product Description" placeholder="Write Short Product description"></textarea>
                           </div>

                           <input type="submit" class="submit"  name="storedata">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->
         </div>
         <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="resources/assets/vendors/js/vendor.bundle.base.js"></script>

      <script src="{{ mix('/js/bootstrap.js') }}"></script>
      <!-- End custom js for this page -->
      <script type="text/javascript">
         function showDiv(divId) {
         const divs = document.querySelectorAll('.data-informantion');
         for (let i = 0; i < divs.length; i++) {
          if (divs[i].id === divId) {
            divs[i].style.display = 'block';
          } else {
            divs[i].style.display = 'none';
          }
         }
         }
         var dis = document.getElementById('div1')
         window.onload = function() {
         dis.style.display = 'block';
         };
          
      </script>
   @endsection