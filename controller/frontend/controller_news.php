<?php 
	class controller_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from news  order by rand() ;");

			include("view/frontend/view_news.php");
		}
	}
	new controller_news();
?>