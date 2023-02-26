
@extends('layouts.layout.customerLayout')

@section('content')
    @include('layouts.header.header');

 <div class="container">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-3 sidebar">
      <div class="sidebar-header">
        <h3>Categories</h3>
      </div>
      <div class="sidebar-body">
         <ul class="category-list">
          @foreach($categories as $category)
          <li>{{$category->categories}}</li>
         @endforeach
        </ul>
      </div>
      <div class="sidebar-header">
        <h3>Filters</h3>
      </div>
      <div class="sidebar-body">
        <ul class="filter-list">
          <li>Filter 1</li>
          <li>Filter 2</li>
          <li>Filter 3</li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-9 main-content">

      <div class="product-grid">

        @foreach($products as $product)
            <div class="product-card">
              <div class="card-header">
                  
                  <button class="add-to-delete-btn">Delete</button>
              </div>
              <a href="{{route('productdetail',$product->id)}}" class="details">
        
              <img src="{{asset('img/'.$product->product_image)}}" alt="product image">

              <h4 class="product-title">{{$product->products_name}}</h4>
            </a>
              <div class="price-count"  >              
                <p class="price">${{$product->product_price}}</p>

               <form>
                  <input class="order_count"  type="number"  placeholder="1">
                </form>
              </div>

              <!-- <button class="add-to-cart-btn">Add to Cart</button> -->
              <a href="#" class="add-to-cart-btn"> Add to cart</a>
            </div>
            
            @endforeach


            
   

      </div>
    </div>
  </div>
</div>

@endsection