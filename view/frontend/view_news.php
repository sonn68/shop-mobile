<div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title" style="color: #000">News</h2>
                        <div class="product-carousel">
                            <!-- Test php -->
                            <?php foreach ($arr as $row){
                             ?>
                            <!-- -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/news/<?php echo $row->image?>" alt="">
                                </div>
                                
                                <h2><a href=""><?php echo $row->name?></a></h2>
                                
                                <div >
                                    <h2><a href=""> <?php echo $row->description ?> </a></h2>
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