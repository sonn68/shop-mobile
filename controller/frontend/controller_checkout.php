<?php 
	class controller_order{
		public $model;
		public function __construct(){
			$this->model=new model();
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				$username=$_SESSION["username"];
				$date=date('Y/m/d  H:i:s');
        // $tong=$_SESSION["total"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $post_code=$_POST["post_code"];
        $order_note=$_POST["order_note"];
        $payments=$_POST["payments"];
				$arr=$this->model->get_a_record("select * from User where username='$username'");
				
				foreach ($_SESSION['cart'] as $product) {
          $id=$product['id'];
          $number=$product['number'];
          $price=$product['price'];
          $this->model->execute("insert into order_detail(id_product,price,date,id_user,status,quantity,address,phone,post_code,order_note,payments) values('$id','$price','$date','$arr->id','0','$number','$address','$phone','$post_code','$order_note','$payments')  ");							}
        echo "<script>location.href='index.php?controller=result_checkout'</script>";
		}
	}
	new controller_order();
 ?>