<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Top Seller</h2>
                        <div class="product-carousel">
                            <!-- Test php -->
                            <?php foreach ($arr as $row){
                             ?>
                            <!-- -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/image/image_in_DB/<?php echo $row->image?>" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="index.php?controller=product_detail&id=<?php echo $row->id?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html"><?php echo $row->name?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$ <?php echo number_format($row->pricenew)?></ins> <del>$ <?php echo number_format($row->price)?></del>
                                </div> 
                            </div>
                        <?php } ?>
                        <!-- End product show -->                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->