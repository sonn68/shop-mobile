<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="brand-wrapper">
                    <div class="brand-list"> 
                        <?php foreach ($arr as $row) { ?>
                        <a href="product/category/<?php echo($row->id) ?>">
                            <img src="public/image/image_in_DB/<?php echo ($row->image) ?>"  >
                        </a>  
                        <?php } ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>