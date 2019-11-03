<?php 
	class controller_top_seller{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from product JOIN order_detail ON product.id = order_detail.id_product order by order_detail.quantity desc limit 1,20 ");
			include("view/frontend/view_top_seller.php");
		}
	}
	new controller_top_seller();
?>