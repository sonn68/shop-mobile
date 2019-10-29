<?php include ("view/frontend/view_brand.php"); ?>
<?php
	class controller_brand {
	 	public $model;
		public function __construct(){
			$this->model= new model();
			$arr=$this->model->get_all("select * from category_product order by rand() desc limit 1,4 ");
			include ("view/frontend/view_brand.php");
		}
	}
	new controller_brand();	
?>