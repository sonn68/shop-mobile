<div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Hot Discount</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php foreach ($arr_hot_discount as $row){
                             ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/image/<?php echo $row->image?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?php echo $row->name?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$ <?php echo number_format($row->pricenew)?></ins> <del>$ <?php echo number_format($row->price)?></del>
                            </div>                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Hot Products</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php foreach ($arr_hot_product as $row){
                             ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/image/<?php echo $row->image?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?php echo $row->name?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$ <?php echo number_format($row->pricenew)?></ins> <del>$ <?php echo number_format($row->price)?></del>
                            </div>                            
                        </div>
                        <?php } ?>                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php foreach ($arr_new as $row){
                             ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/image/<?php echo $row->image?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?php echo $row->name?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$ <?php echo number_format($row->pricenew)?></ins> <del>$ <?php echo number_format($row->price)?></del>
                            </div>                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->