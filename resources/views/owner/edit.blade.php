@extends('layouts.layout.adminLayout')

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
                @if(session('productupdated'))
                            <div class="alert alert-success">
                                {{ session('productupdated') }}
                            </div>
                        @endif
              

                  <div class="row">
                        
                   

                     <div class="col-9">
                        <h1>Edit Product</h1>
                        <form action="{{route('Updateproduct',$editproduct->id)}}" method="POST" enctype="multipart/form-data" >

                           @csrf
                           <div class="card">
                              <input name="product_name" class=" form-control-lg bg-white  productName" value="{{$editproduct->product_name}}" type="text" placeholder="Product Name">
                           </div>
                           <div class="card">
                              <textarea class="form-control-lg bg-white productDes"  maxlength="3000" name="long_description" id="longDescription"  placeholder="Write Product description">{{$editproduct->short_discription}}</textarea>
                              <p>Word count: <span id="wordCountlongDescription">0</span> Max :3000</p>
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
                                       <input type="text" class ="singleproduct" placeholder="1000" value="{{$editproduct->product_price}}" name="singleProductPrice">
                                    </div>
                                    <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Min. Number For Sell</p>
                                       <input type="number" value="{{$editproduct->minmum_sell}}"  class ="singleproduct" name="numberOfSell" placeholder="1,2,3....">
                                    </div>
                                   
                                 </div>
                                 <div id ="div2" class="data-informantion">
                                      <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Weight(kg)</p>
                                        <input type="text" class ="singleproduct" value="{{$editproduct->weight}}"  placeholder="10,11,12...." name="weight">
                                      
                                    </div>
                                    <div class="general mt-4 d-flex justify-content-between">
                                       <p class="singleProduct ">Dimensions(ft)</p>
                                        <input type="text" value="{{$editproduct->lenght}}"  class ="weight" name="length" placeholder="Length(ft)">
                                       <input type="text" class ="weight" value="{{$editproduct->width}}"  name="width" placeholder="Widht(ft)">
                                       <input type="text" class ="weight" name="height" value="{{$editproduct->height}}"  placeholder="Height(ft)">
                                      
                                    </div>
                                 </div>
                                 <div id ="div3" class="data-informantion">

                               

                                   <div class="general d-flex justify-content-between">
                                     <p  class="singleProduct ">Category</p>

                                        <select name="category"   class ="singleproduct">
                                          <option>{{$editproduct->product_category}}</option>
                                          @foreach($categories as $category)
                                          <option value="{{$category->categories}}" >{{$category->categories}}</option>
                                          @endforeach
                                        </select>
                                        
                                </div>
                                <div class="general d-flex justify-content-between">
                                       <p class="singleProduct">Stock quantity</p>
                                       <input type="number" class ="singleproduct" value="{{$editproduct->stock}}" name="totalstock" placeholder="100,200,300....">
                                    </div>
                                 </div>
                                 <div id ="div4" class="data-informantion">
                                        
                                   <div class="general d-flex justify-content-between">
                                     <p class="singleProduct ">Product Image</p>
                                      <input type="file"  class ="singleproduct" name="image" >

                                  
                                </div>
                                <div class="general d-flex justify-content-between">
                                      

                                        <img src="/images/{{$editproduct->image}}" class="singleProduct" style="width:150px; height: 150px; border-radius: 00px;"  alt="product Image" multiple />

                                       
                                       
                                     </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="card">

                              <textarea class="form-control-lg bg-white productDes" maxlength="350" name="short_description" id="myTextarea" placeholder="Write Short Product description">{{$editproduct->short_discription}}</textarea>
                              <textarea ></textarea>
                              <p>Word count: <span id="wordCount">0</span>Max :350</p>

                           </div>

                           <input type="submit" class="submit"  >
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


    const textarea = document.getElementById('myTextarea');
const wordCount = document.getElementById('wordCount');

textarea.addEventListener('input', function() {
  const text = this.value.trim();
  const characterCount = text.length;
  
  if (characterCount > 350) {
    textarea.value = text.slice(0, 350);
    wordCount.textContent = 350;
  } else {
    wordCount.textContent = characterCount;
  }
});      





    const textareaD = document.getElementById('longDescription');
const wordCountD = document.getElementById('wordCountlongDescription');

textareaD.addEventListener('input', function() {
  const text = this.value.trim();
  const characterCount = text.length;
  
  if (characterCount > 3000) {
    textareaD.value = text.slice(0, 3000);
    wordCountD.textContent = 3000;
  } else {
    wordCountD.textContent = characterCount;
  }
});            </script>
   @endsection