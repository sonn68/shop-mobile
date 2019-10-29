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
				 
				$subject=$_POST["subject"];
				$content=$_POST["content"];
				$time=date('Y-m-d H:i:s');
				$c_maxacnhan=$_POST["c_maxacnhan"];
				if(isset($c_maxacnhan)&&$c_maxacnhan==$_SESSION["c_code"]){
					$this->model->execute("insert into contact( subject,content,time) values('$subject','$content','$time') ");
					$tb="Bạn đã gửi phản hồi thành công.Chúng tôi sẽ sớm trả lời cho bạn!!";
					include("view/backend/view_feedback.php");
				}
				else{
					$tb="Sai mã xác nhận. Nhập lại";
					include("view/backend/view_feedback.php");
				}
				break;

				}
			
			include("view/backend/view_feedback.php");
		}
	}
	new controller_add_feedback();
 ?>