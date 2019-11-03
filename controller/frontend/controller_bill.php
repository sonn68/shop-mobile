<?php 
	class controller_bill{
		public $model;
		public function __construct(){
      $this->model=new model();
			if(isset($_SESSION["username"])){
				//Khách đã đăng nhập
				$tmp=$_SESSION["username"];

				$arr=$this->model->get_a_record("select * from User where username='$tmp'");
				include("view/frontend/view_bill1.php");
			}
			else{
				//khách vãng lai
        $act=isset($_GET["act"])?$_GET["act"]:"";
        if($act == 'login'){
          $this->login();
        }
				include("view/frontend/view_bill2.php");
			}
    }
    public function login(){
      if($_SERVER["REQUEST_METHOD"]=="POST"){
				$username=$_POST["username"];
				$password=$_POST["password"];
				// thực hiện đăng nhập
				$check=$this->model->get_a_record("select * from User where username='$username'");
				
				if(isset($check->username)){
					if($check->password==md5($password)){
						$_SESSION["username"]=$username;
						
						echo "<script>location.href='index.php?controller=bill'</script>";
					}
					else{
						$tm="Sai tài khoản hoặc mật khẩu. Nhập lại!!";
					}
				}
				else
          $tm="Sai tài khoản hoặc mật khẩu. Nhập lại!!";
      }
    }
	}
	new controller_bill();
 ?>