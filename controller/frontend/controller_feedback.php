<?php 
	class controller_feedback{
		public $model;
		public function __construct(){
      $this->model=new model();
      date_default_timezone_set("Asia/Ho_Chi_Minh");
      $id=isset($_GET["id"])?$_GET["id"]:"";
      $date=date('Y/m/d  H:i:s');
      $username=$_POST["name"];
      $subject=$_POST["subject"];
      $content=$_POST["content"];
      $this->model->execute("insert into feedback(username,id_product,subject,content,time) values('$username','$id','$subject','$content','$date') ");
      echo "<script>location.href='index.php?controller=product_detail&id=$id'</script>";
		}
	}
	new controller_feedback();
?>