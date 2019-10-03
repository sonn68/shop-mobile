<?php 
	class  controller_register{
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
        $name=$_POST["name"];
        $birthday=$_POST["birthday"];
        $address=$_POST["address"];
        $phone=$_POST["phone"];
        $check=$this->model->get_num_rows("select * from User where username='$username'");
        if($check==0){
          $password=md5($password);
          $this->model->execute(
            "insert into User(username,password,name,birthday,address,phone) values(
              '$username','$password','$name','$birthday','$address','$phone'
              )"
          );
          $_SESSION["username"]=$username;
          header("location:index.php");
        }
        else{
          $rt="Tài khoản đã tồn tại. Nhập lại";
        }
      }
      include("view/frontend/view_register.php");
    }
	}
	new controller_register();
 ?>