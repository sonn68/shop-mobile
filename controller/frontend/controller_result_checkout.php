<?php 
	class controller_result_checkout{
		public $model;
		public function __construct(){
			$this->model=new model();
			$username=$_SESSION["username"];
      $tx=$this->model->get_a_record("select * from User where username='$username'");
			$check=$this->model->get_a_record("select * from order_detail where id_user=$tx->id order by id desc limit 0,1 ");
			include("view/frontend/view_result_checkout.php");
		}
	}
	new controller_result_checkout();
 ?>