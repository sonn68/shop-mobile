<?php 
	class  controller_add_user{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_user&act=do_add";
				break;
				case 'do_add':
					$username=$_POST["username"];
					$password=$_POST["password"];
					$check=$this->model->get_num_rows("select * from user where username='$username'");
					if($check==0){
						$password=md5($password);
							$this->model->execute("insert into user(username,password) values('$username','$password')");
						// thực hiện thêm thông tin đó vào bảng information_user
						$arr=$this->model->get_a_record("select * from user where username='$username' ");
						$this->model->execute("insert into infomation_user(user_id) values($arr->id)");
						header("location:admin.php?controller=product_user");
					}
					else{
						$rt="Tài khoản đã tồn tại. Nhập lại";
					}

					break;
				case 'delete':
				$this->model->execute("delete from user where id=$id");
				header("location:admin.php?controller=product_user");
				break;
			}
			include("view/backend/view_add_user.php");
		}
	}
	new controller_add_user();
 ?>