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
           @if(session('categoryadd'))
                            <div class="alert alert-success">
                                {{ session('categoryadd') }}
                            </div>
                        @endif
          <div class="content-wrapper">

            <div class="row ml-5">

              <div class="col-6 mx-auto mt-2 grid-margin stretch-card ">
                <div class="card  ">
                  <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <p class="card-description"> Add Categories </p>
                    <form class="forms-sample" action="{{ route('storeCategory') }}" method ="POST">
                      @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2"  class="col-sm-4 col-form-label">Add Category</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="category" placeholder="Category">
                        </div>
                      </div>
                     
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer ">
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
    <script src="resources/assets/vendors/js/vendor.bundle.base.js"></script>


    <!-- endinject -->
    @endsection