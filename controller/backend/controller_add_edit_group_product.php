<?php 
	class controller_add_edit_group_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_edit_group_product&act=do_add";
				break;
				case 'do_add':
					$name=$_POST["name"];
					$this->model->execute("insert into group_product(name) values('$name')");
					
					header("location:admin.php?controller=group_product");
				break;
				case 'delete':
				$this->model->execute("delete from group_product where id=$id");
					header("location:admin.php?controller=group_product");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_group_product&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from group_product where id=$id");
				break;
				case 'do_edit':
					$name=$_POST["name"];
					$this->model->execute("update group_product set name='$name' where id=$id");
					header("location:admin.php?controller=group_product");
				break;
			}
			include("view/backend/view_add_edit_group_product.php");
		}
	}
	new controller_add_edit_group_product();
 ?>