<?php 
	class controller_edit_user{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'edit':
					$arr=$this->model->get_a_record("select * from User where id=$id");
					$form_action="admin.php?controller=edit_user&act=do_edit&id=$id";
					break;
				case 'do_edit':
				$name=$_POST["name"];
				$address=$_POST["address"];
				$phone=$_POST["phone"]; 
				if(isset($arr->img)&&$arr->img!=""){
				$img=$_FILES["img"]["name"];
					if($img!=""){
						$old_img=$this->model->get_a_record("select * from User where id=$id");
						unlink("public/backend/images/avt/".$old_img->img);
						$tmp=$_FILES["img"]["tmp_name"];
						$img=time().$img;
						move_uploaded_file($tmp,"public/backend/images/avt/$img");
						$this->model->execute("update User set img='$img' where id=$id");
						
					}
					}
					else{

						$img=$_FILES["img"]["name"];
						if($img!=""){
							$tmp=$_FILES["img"]["tmp_name"];
							$img=time().$img;
							move_uploaded_file($tmp,"public/backend/images/avt/$img");
							$this->model->execute("update User set img='$img' where id=$id");
							
					}
					}
				
				$this->model->execute("update User set name='$name',address='$address',phone='$phone'  where id=$id"); 
				 
				header("location:admin.php?controller=user&name='$tam'");
				break;

			}

			include("view/backend/view_edit_user.php");
		}
	}
	new controller_edit_user();
 ?>