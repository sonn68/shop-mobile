
<?php 	
	class controller_slide {
	 	public $model;
		public function __construct(){
			$this->model= new model();
			$arr_slide=$this->model->get_all("select * from product order by rand() desc limit 1,4 ");
			include ("view/frontend/view_slider.php");
		}
	}
	new controller_slide();	
 ?>