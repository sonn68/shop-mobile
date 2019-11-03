<div class="header-area" style=" margin-left: 5%; margin-right: 5%;">
 
    </div>
    <!-- End header area -->

    <!-- begin site and cart area  --> 
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="">Shop Mobile</a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="index.php?controller=cart">Cart - <span class="cart-amunt">
                            <?php 
                            if(isset($_SESSION["cart"])){
                                $sum=0;
                                foreach ($_SESSION["cart"] as $product) {
                                    $sum += $product['price'] * $product['number'];
                                }
                                echo $sum;
                            }else echo "0";
                             ?>
                        </span> <i class="fa fa-shopping-cart"></i> <span class="product-count">
                        <?php 
                        if(isset($_SESSION["cart"])){
                            $number= 0;
                            foreach ($_SESSION["cart"] as $product) {
                                $number += $product['number'];
                            }
                            echo $number;
                        }else echo "0";
                            ?>
                        </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End site and cart area -->
    
    <!-- begin mainmenu area --> 
    <div class="mainmenu-area">
        <div class="container" style=" width: 90%; background-color: #333 ">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="index.php?controller=shop">Shop</a></li>
                        <li class="lever3">
                            <a href="index.php?controller=shop">Product</a>
                            <ul class="lever10" style="list-style: none;">
                                <?php foreach ($arr as $rows) { ?>
                                <li class="last10">
                                    <a href="index.php?controller=product_widget"><span><?php echo $rows->name ?></span></a>
                                </li>
                                <?php } ?>
                            </ul>

                        </li>
                        <li><a href="index.php?controller=cart">Cart</a></li>
                        <li><a href="index.php?controller=bill">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    