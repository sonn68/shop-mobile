<div class="col-md-8">
  <div class="product-content-right">
    <!-- <div class="product-breadcroumb">
      <a href="">Home</a>
      <a href="">Category Name</a>
      <a href="">Sony Smart TV - 2015</a>
    </div> -->
    <div class="row">
      <div class="col-sm-6">
        <div class="product-images">
          <div class="product-main-img">
            <img src="public/backend/images/<?php echo $arr->image ?>" alt="">
          </div>

          <div class="product-gallery">
            <img src="img/product-thumb-1.jpg" alt="">
            <img src="img/product-thumb-2.jpg" alt="">
            <img src="img/product-thumb-3.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="product-inner">
          <h2 class="product-name"><?php echo $arr->name ?></h2>
          <div class="product-inner-price">
            <ins><?php echo $arr->pricenew ?> VNĐ</ins> <del><?php echo $arr->price ?> VNĐ</del>
          </div>

          <form action="" class="cart">
            
            <a href="index.php?controller=cart&act=add&id=<?php echo $arr->id?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
          </form>

          <div class="product-inner-category">
            <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>,
              <a href="">shoes</a>. </p>
          </div>

          <div role="tabpanel">
            <ul class="product-tab" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                  data-toggle="tab">Description</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                  data-toggle="tab">Reviews</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="home">
                <h2>Product Description</h2>
                <p><?php echo $arr->content?></p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="profile">
                <h2>Reviews</h2>
                <div class="submit-review">
                  <p><label for="name">Name</label> <input name="name" type="text"></p>
                  <p><label for="email">Email</label> <input name="email" type="email"></p>
                  <div class="rating-chooser">
                    <p>Your rating</p>

                    <div class="rating-wrap-post">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p><label for="review">Your review</label> <textarea name="review" id="" cols="30"
                      rows="10"></textarea></p>
                  <p><input type="submit" value="Submit"></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>