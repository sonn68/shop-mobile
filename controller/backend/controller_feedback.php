<?php 
	class controller_feedback{
		public $model;
		public function __construct(){
			$this->model=new model();

			include("view/backend/view_feedback.php");
		}
	}
	new controller_feedback();
 ?>