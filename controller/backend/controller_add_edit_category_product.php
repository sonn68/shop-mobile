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
					$c_name=$_POST["c_name"];
					$group_product_id=$_POST["group_product_id"];
					$this->model->execute("insert into category_product(c_name,group_product_id) values('$c_name','$group_product_id')");
					
					header("location:admin.php?controller=category_product");
				break;
				case 'delete':
				$this->model->execute("delete from category_product where category_product_id=$id");
					header("location:admin.php?controller=category_product");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from category_product where category_product_id=$id");
				break;
				case 'do_edit':
					$c_name=$_POST["c_name"];
					$group_product_id=$_POST["group_product_id"];
					$this->model->execute("update category_product set c_name='$c_name',group_product_id='$group_product_id' where category_product_id=$id");
					header("location:admin.php?controller=category_product");
				break;
			}
			include("view/backend/view_add_edit_category_product.php");
		}
	}
	new controller_add_edit_category_product();
 ?>