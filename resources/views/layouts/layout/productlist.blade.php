<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SHOP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    @vite('resources/custom/shop.style.css')
     
      @vite('resources/custom/animate.min.css')
       @vite('resources/custom/owl.carousel.min.css')
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  


</head>

<body>



       @yield('productcontent')




  <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
        @vite('resources/js/productlist.js')
        @vite('resources/js/contact.js')
        @vite('resources/js/owl.carousel.min.js')
        @vite('resources/js/jqBootstrapValidation.min.js')
        @vite('resources/js/easing.min.js')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


</body>

</html>



