<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    @vite('resources/assets/vendors/mdi/css/materialdesignicons.min.css')
    @vite('resources/assets/vendors/css/vendor.bundle.base.css')
    @vite('resources/assets/vendors/select2/select2.min.css')
    @vite('resources/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')
    @vite('resources/assets/css/style.css')
    @vite('resources/assets/images/favicon.png')
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
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

            <div class="row ml-5">

              <div class="col-6 mx-auto mt-2 grid-margin stretch-card ">
                <div class="card  ">
                  <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <p class="card-description"> Add Categories </p>
                    <form class="forms-sample" action="{{route('storeCategory')}}" method ="POST">
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
    @vite('resources/assets/vendors/js/vendor.bundle.base.js')
    @vite('resources/assets/vendors/select2/select2.min.js')
    @vite('resources/assets/vendors/typeahead.js/typeahead.bundle.min.js')
    @vite('resources/assets/js/off-canvas.js')
    @vite('resources/assets/js/hoverable-collapse.js')
    @vite('resources/assets/js/misc.js')
    @vite('resources/assets/js/settings.js')
    @vite('resources/assets/js/todolist.js')
    @vite('resources/assets/js/file-upload.js')
    @vite('resources/assets/js/typeahead.js')
    @vite('resources/assets/js/select2.jsresources')

    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="resources/assets/vendors/select2/select2.min.js"></script>
    <script src="resources/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="resources/assets/js/off-canvas.js"></script>
    <script src="resources/assets/js/hoverable-collapse.js"></script>
    <script src="resources/assets/js/misc.js"></script>
    <script src="resources/assets/js/settings.js"></script>
    <script src="resources/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="resources/assets/js/file-upload.js"></script>
    <script src="resources/assets/js/typeahead.js"></script>
    <script src="resources/assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>