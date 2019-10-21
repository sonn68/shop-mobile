<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="public/backend/style.css">
    <link rel="stylesheet" href="public/CSS_N/responsive.css">

    <script src="https://kit.fontawesome.com/42c80e2027.js" crossorigin="anonymous"></script>

  </head>
  <body>
   
   <?php include("controller/frontend/controller_header.php"); ?>
   <?php include("controller/frontend/controller_slider.php"); ?>
   <?php include("controller/frontend/controller_brand.php"); ?>
   <?php include("controller/frontend/controller_top_seller.php"); ?>

    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    
    
    
    <?php include("controller/frontend/controller_product_widget.php"); ?>
    
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