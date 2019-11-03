<?php 
	class controller_product_detail{
		public $model;
		public function __construct(){
			$this->model=new model();
			$id=isset($_GET["id"])?$_GET["id"]:"";
			$arr=$this->model->get_a_record("select * from product where id=$id");
			include("view/frontend/view_product_detail.php");
		}
	}
	new controller_product_detail();
 ?>