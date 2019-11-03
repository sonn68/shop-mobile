<div class="slider-area">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">
                    <?php foreach ($arr_slide as $row){ ?>
                    <li>
                        <div style="width:30%; height: 30%; margin-left: 7vw;">
                            <img class="image-slider" src="public/backend/images/<?php echo $row->image?>" alt="Slide">
                        </div>                
                        <div class="caption-group" >
                            <div style="width: 350px; height: 300px; left: 50%;  word-wrap: break-word;">
                                <h2 style="font-size: 2.5vw" class="caption title" >
                                <span class="primary"> <strong><?php echo $row->name?></strong></span>
                            </h2>
                            <!-- <h4 class="caption subtitle">Dual SIM</h4> -->
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div>
                            
                        </div>
                    </li>
                    <?php } ?>
                    
                    
                </ul>
            </div>
            <!-- ./Slider -->
    </div> <!-- End slider area -->