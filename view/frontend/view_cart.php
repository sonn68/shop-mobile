<div class="col-md-12">
  <div class="product-content-right">
    <div class="woocommerce">
      <form method="post" action="index.php?controller=cart&act=update">
        <table cellspacing="0" class="shop_table cart">
          <thead>
            <tr>
              <th class="product-remove">&nbsp;</th>
              <th class="product-thumbnail">&nbsp;</th>
              <th class="product-name">Product</th>
              <th class="product-price">Price</th>
              <th class="product-quantity">Quantity</th>
              <th class="product-subtotal">Total</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($_SESSION["cart"] as $product) { ?>
            <tr class="cart_item">
              <td class="product-remove">
                <a title="Remove this item" class="remove" href="index.php?controller=cart&act=delete&id=<?php echo $product['id']?>">×</a>
              </td>

              <td class="product-thumbnail">
                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail"
                    src="public/backend/images/<?php echo $product['image'];?>"></a>
              </td>

              <td class="product-name">
                <a href="single-product.html"><?php echo $product['name'];?></a>
              </td>

              <td class="product-price">
                <span class="amount"><?php echo $product['price'];?> VNĐ</span>
              </td>

              <td class="product-quantity">
                <div class="quantity buttons_added">
                  <span><?php echo $product['number'];?></span>
                </div>
              </td>

              <td class="product-subtotal">
                <span class="amount"><?php echo $product['price'] * $product['number'];?> VNĐ</span>
              </td>
            </tr>
            <?php } ?>
            <tr>
              <td class="actions" colspan="6">
                <a href="index.php?controller=cart&act=delete_all" class="btn btn-warning">Xóa toàn bộ sản phẩm</a>
                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
              </td>
            </tr>
          </tbody>
        </table>
      </form>

      <div class="cart-collaterals">

        <div class="cart_totals ">
          <h2>Cart Totals</h2>

          <table cellspacing="0">
            <tbody>
              <tr class="cart-subtotal">
                <th>Cart Subtotal</th>
                <td><span class="amount"><?php echo $product['price'] * $product['number'];?> VNĐ</span></td>
              </tr>

              <tr class="shipping">
                <th>Shipping and Handling</th>
                <td>Free Shipping</td>
              </tr>

              <tr class="order-total">
                <th>Order Total</th>
                <td><strong><span class="amount"><?php echo $product['price'] * $product['number'];?> VNĐ</span></strong> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>