<?php 
	class controller_order{
		public $model;
		public function __construct(){
			$this->model=new model;
			$record_perpage=4;
			$total=$this->model->get_num_rows("select id from order_shop");
			$num_page=ceil($total/$record_perpage);
			$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			$from=$page*$record_perpage;
			$arr=$this->model->get_all("select * from order_shop order by id desc limit $from,$record_perpage");
			include("view/backend/view_order.php");
		}
	}
	new controller_order();
 ?>