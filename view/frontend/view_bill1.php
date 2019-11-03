<div class="col-md-12">
  <div class="product-content-right">
    <div class="woocommerce">

      <form enctype="multipart/form-data" action="index.php?controller=checkout" class="checkout" method="post" name="checkout">

        <div id="customer_details" class="col2-set">
          <div class="col-md-12">
            <div class="woocommerce-billing-fields">
              <h3>Billing Details</h3>

              <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                <label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="address"
                  class="input-text ">
              </p>

              <p id="billing_postcode_field"
                class="form-row form-row-last address-field validate-required validate-postcode"
                data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                <label class="" for="billing_postcode">Postcode <abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="Postcode / Zip" id="billing_postcode" name="post_code"
                  class="input-text ">
              </p>

              <div class="clear"></div>

              <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                <label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
                </label>
                <input type="text" value="" placeholder="" id="billing_phone" name="phone" class="input-text ">
              </p>
              <div class="clear"></div>

              <p id="order_comments_field" class="form-row notes">
                <label class="" for="order_comments">Order Notes</label>
                <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery."
                  id="order_comments" class="input-text " name="order_note"></textarea>
              </p>
            </div>
          </div>

        </div>

        <h3 id="order_review_heading">Your order</h3>

        <div id="order_review" style="position: relative;">
          <table class="shop_table">
            <thead>
              <tr>
                <th class="product-name">Product</th>
                <th class="product-total">Total</th>
              </tr>
            </thead>
            <?php foreach ($_SESSION["cart"] as $product) { ?>
            <tbody>
              <tr class="cart_item">
                <td class="product-name">
                  <span><?php echo $product['name'];?></span>
                  <strong class="product-quantity">× <?php echo $product['number'];?></strong>
                </td>
                <td class="product-total">
                  <span class="amount"><?php echo $product['price'] * $product['number'];?> VNĐ</span> </td>
              </tr>
            </tbody>
            <tfoot>

              <tr class="cart-subtotal">
                <th>Cart Subtotal</th>
                <td><span class="amount"><?php echo $product['price'] * $product['number'];?> VNĐ</span>
                </td>
              </tr>

              <tr class="shipping">
                <th>Shipping and Handling</th>
                <td>

                  Free Shipping
                  <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0"
                    data-index="0" name="shipping_method[0]">
                </td>
              </tr>


              <tr class="order-total">
                <th>Order Total</th>
                <td><strong><span class="amount"><?php echo $product['price'] * $product['number'];?> VNĐ</span></strong> </td>
              </tr>

            </tfoot>
            <?php } ?>
          </table>


          <div id="payment">
            <ul class="payment_methods methods">
              <li class="payment_method_bacs">
                <input type="radio" data-order_button_text="" checked="checked" value="Trực tiếp" name="payments"
                  class="input-radio" id="payment_method_bacs">
                <label for="payment_method_bacs">Thanh toán trực tiếp </label>
                <div class="payment_box payment_method_bacs">
                  <p>Thanh toán sau khi nhận hàng.</p>
                </div>
              </li>
              <li class="payment_method_cheque">
                <input type="radio" data-order_button_text="" value="Chuyển khoản" name="payments" class="input-radio"
                  id="payment_method_cheque">
                <label for="payment_method_cheque">Chuyển khoản </label>
                <div style="display:none;" class="payment_box payment_method_cheque">
                  <p>Vui lòng chuyển vào số tài khoản Vietcombank nội dung ghi số đt, và tên.</p>
                </div>
              </li>
              <li class="payment_method_cheque">
                <input type="radio" data-order_button_text="" value="Ngân lượng" name="payments" class="input-radio"
                  id="payment_method_cheque">
                <label for="payment_method_cheque">Thanh toán ngân lượng</label>

              </li>
            </ul>

            <div class="form-row place-order">

              <input type="submit" data-value="Place order" value="Place order" id="place_order"
                name="woocommerce_checkout_place_order" class="button alt">

            </div>

            <div class="clear"></div>

          </div>
        </div>
      </form>

    </div>
  </div>
</div>