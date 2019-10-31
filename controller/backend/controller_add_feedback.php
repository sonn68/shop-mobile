<?php 
	class controller_add_feedback{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				// case 'add':
				// 	$form_action="index.php?controller=add_contact&act=do_add";
				// 	break;
				case 'do_add':
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				$username = $_POST["username"];
				$id_product = $_POST["id_product"];
				$subject=$_POST["subject"];
				$content=$_POST["content"];
				$time=date('Y-m-d H:i:s');
				 
				$this->model->execute("insert into feedback(username,id_product, subject,content,time) values('$username', '$id_product', '$subject','$content','$time') ");
				header("location:admin.php?controller=feedback");
				break;
			}
			include("view/backend/view_feedback.php");
		}
	}
	new controller_add_feedback();
 ?>