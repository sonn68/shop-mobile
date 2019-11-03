<?php
	class controller_cart{
		public $model;
		public function __construct(){			
			$this->model = new model();
			//khởi tạo giỏ hàng
			if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
			//===========	
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'add':
					//lấy biến id
				//goi ham cart add de them san phan vao gio
				$this->cart_add($id);
				echo "<script>location.href='index.php?controller=cart';</script>";
					break;
				case 'delete':
					$this->cart_delete($id);
					echo "<script>location.href='index.php?controller=cart';</script>";
				break;
				case 'delete_all':
				// goi xoa toan bo gio hang
				$this->cart_destroy();
				
				echo "<script>location.href='index.php?controller=cart';</script>";
				break;
				case 'update':
					
					foreach ($_SESSION["cart"] as $product) {
						$str="product_".$product["product_id"];
						$number= $_POST[$str];
						//cập nhật
						$this->cart_update($product["product_id"],$number);
						$_SESSION["total"]=$this->cart_total();
					}
					echo "<script>location.href='index.php?controller=bill';</script>";
				break;
			}
			//===========
			//load view
			include "view/frontend/view_cart.php";
			//=================
		}

		public function cart_add($pk_product_id){
		    if(isset($_SESSION['cart'][$pk_product_id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$pk_product_id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        $product = $this->model->get_a_record("select * from product where id=$pk_product_id");
		        
		        $_SESSION['cart'][$pk_product_id] = array(
		            'id' => $pk_product_id,
		            'name' => $product->name,
		            'image' => $product->image,
		            'number' => 1,
		            'price' => $product->pricenew
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cart_update($pk_product_id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$pk_product_id]);
		    } else {
		        $_SESSION['cart'][$pk_product_id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($pk_product_id){
		    unset($_SESSION['cart'][$pk_product_id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['c_price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}
	new controller_cart();
?>