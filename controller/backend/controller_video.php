<?php 
	class controller_video{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from video order by id desc");
			include("view/backend/view_video.php");
		}	
	}
	new controller_video();
 ?>