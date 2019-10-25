<?php 
	class controller_add_edit_category_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_edit_category_product&act=do_add";
				break;
				case 'do_add':
					$name=$_POST["name"];
					$id_group=$_POST["id_group"];
					$this->model->execute("insert into category_product(name,id_group) values('$name','$id_group')");
					
					header("location:admin.php?controller=category_product");
				break;
				case 'delete':
				$this->model->execute("delete from category_product where id=$id");
					header("location:admin.php?controller=category_product");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from category_product where id=$id");
				break;
				case 'do_edit':
					$name=$_POST["name"];
					$id_group=$_POST["id_group"];
					$this->model->execute("update category_product set name='$name', id_group='$id_group' where id=$id");
					header("location:admin.php?controller=category_product");
				break;
			}
			include("view/backend/view_add_edit_category_product.php");
		}
	}
	new controller_add_edit_category_product();
 ?>