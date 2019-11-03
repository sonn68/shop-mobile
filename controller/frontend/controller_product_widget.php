<?php  
	class controller_product_widget{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr_hot_discount=$this->model->get_all("select * from product order by (price - pricenew) desc limit 0,4 ");
			$arr_hot_product=$this->model->get_all("select * from product where (hot_product = 1) limit 0,4 ");
			$arr_new=$this->model->get_all("select * from product order by release_date desc limit 0,4 ");
			include("view/frontend/view_product_widget.php");
		}
	}
	new controller_product_widget();?>

