<?php 
	class controller_user{
		public $model;
		public function __construct(){
			$this->model=new model();
			$name=isset($_SESSION["username"])?$_SESSION["username"]:"";
			$arr=$this->model->get_a_record("select * from User where username='$name'");
			$row=$this->model->get_a_record("select * from User where id='$arr->id'");
			include("view/backend/view_user.php");
		}
	}
	new controller_user();
 ?>