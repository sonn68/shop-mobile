<?php 
	class controller_edit_role{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) { 
				case 'edit':
				$form_action="admin.php?controller=edit_role&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from User where id=$id");
				break;
				case 'do_edit':
					$role=$_POST["role"];
					$this->model->execute("update User set role='$role' where id=$id");
					header("location:admin.php?controller=User");
				break;
			}
			include("view/backend/view_edit_role.php");
		}
	}
	new controller_edit_role();
 ?>