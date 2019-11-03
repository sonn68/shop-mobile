<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://localhost/shop-mobile/">
    <title>SHOP MOBILE</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/CSS_N/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/CSS_N/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/CSS_N/owl.carousel.css">
    <link rel="stylesheet" href="public/CSS_N/style.css">
    <link rel="stylesheet" href="public/CSS_N/responsive.css">
    
    <script src="https://kit.fontawesome.com/42c80e2027.js" crossorigin="anonymous"></script>

  </head>
  <body>
   
   <?php include("controller/frontend/controller_header.php"); ?>

  <div class="container" style="margin-top: 50px;">
    <?php 
      if(file_exists($controller))
        include $controller;
    ?>
  </div>
    
    <?php include("controller/frontend/controller_footer.php"); ?>
    
    
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="public/backend/js/owl.carousel.min.js"></script>
    <script src="public/backend/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="public/backend/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="public/backend/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="public/backend/js/bxslider.min.js"></script>
    <script type="text/javascript" src="public/backend/js/script.slider.js"></script>
  </body>
</html>