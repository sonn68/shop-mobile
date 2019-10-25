<div class="slider-area">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">
                    <?php foreach ($arr_slide as $row){ ?>
                    <li>
                        <img style="height: 236px;width: 525px;" src="public/image/image_in_DB/<?php echo $row->image?>" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title" >
                                <span class="primary"> <strong><?php echo $row->name?></strong></span>
                            </h2>
                            <!-- <h4 class="caption subtitle">Dual SIM</h4> -->
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <?php } ?>
                    
                    
                </ul>
            </div>
            <!-- ./Slider -->
    </div> <!-- End slider area -->