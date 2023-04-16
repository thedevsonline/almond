@extends('layouts.layout.adminLayout')

@section('admincontent')

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.sidebar.ownerSidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('layouts.header.ownerheader')
        <!-- partial -->
        <div class="main-panel">
         
          <div class="content-wrapper">
             @if(session('deleteproduct'))
                            <div class="alert alert-danger">
                                {{ session('deleteproduct') }}
                            </div>
                        @endif
          
          
      
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">

                  
                  <div class="card-body">
                    <h4 class="card-title">Products Added By {{ Auth::user()->name }}</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> Image </th>
                            <th> ID </th>
                            <th> seller id </th>
                            <th> Product name </th>
                            <th> Short description </th>
                            <th> Single product Price </th>
                            <th> Minmum sell </th>
                            <th> stock </th>
                            <th> weight of a sell</th>
                            <th> length of a sell </th>
                            <th> width of a sell </th>
                            
                             <th> height of a sell </th>
                             <th> category </th>
                             <th> price on minmum sell </th>
                             <th> Edit </th>
                             <th> Delete </th>
                             
                          </tr>
                        </thead>
                        <tbody>
                         
                            @foreach($productbyowners as $productbyowner )
                             <tr>
                            <td><img src="/images/{{$productbyowner->image}}" style="width:150px; height: 150px; border-radius: 00px;"  alt="product Image" /></td>
                            <td>{{$productbyowner->id}}</td>
                            <td>  {{$productbyowner->sellerid}} </td>
                            <td> {{$productbyowner->product_name}}</td>
                            <td> {{$productbyowner->short_discription }} </td>
                            <td> {{$productbyowner->product_price}} </td>
                            <td> {{$productbyowner->minmum_sell}} </td>
                            <td> {{$productbyowner->stock}} </td>
                            <td> {{$productbyowner->weight}} </td>
                            <td> {{$productbyowner->lenght}} </td>
                            <td> {{$productbyowner->width}} </td>
                            <td> {{$productbyowner->height}} </td>
                            <td> {{$productbyowner->product_category}} </td>
                            <td> {{$productbyowner->totalprice}} </td>
                            <td>
                                  <a class="badge badge-outline-warning" href="{{route('edit',$productbyowner->id)}}">EDIT</a>
                            </td>
                            <td>
                               <a class="badge badge-outline-danger" onclick="return confirm('Are You Sure To Delete This product')" href="{{route('delete',$productbyowner->id)}}">DELETE</a>
                            </td>
                             
                            </tr>
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @endsection