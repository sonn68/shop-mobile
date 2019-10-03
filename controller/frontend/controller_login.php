<?php 
	class controller_login{
		public $model;
		public function __construct(){
			if(isset($_SESSION["username"])==true){
        header("location:index.php");
        return;
      }
			$this->model=new model();
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$username=$_POST["username"];
				$password=$_POST["password"];
				// thực hiện đăng nhập
				$check=$this->model->get_a_record("select * from User where username='$username'");
				
				if(isset($check->username)){
					if($check->password==md5($password)){
						$_SESSION["username"]=$username;
						
						header("location:index.php");
					}
					else{
						$tm="Sai tài khoản hoặc mật khẩu. Nhập lại!!";
					}
				}
				else
					$tm="Sai tài khoản hoặc mật khẩu. Nhập lại!!";
			}
			include("view/frontend/view_login.php");
		}
	}
	new controller_login();
 ?>