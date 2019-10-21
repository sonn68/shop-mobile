<?php 
	class controller_header{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from group_product ");
			include ("view/frontend/view_header.php");
		}
	}
	new controller_header();
 ?>