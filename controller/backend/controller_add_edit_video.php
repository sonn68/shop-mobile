<?php 
	class controller_add_edit_video{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_edit_video&act=do_add";
				break;
				case 'do_add':
					$author=$_POST["author"];  
					$url=$_POST["url"]; 
					$id_product=$_POST["id_product"];
					$this->model->execute("insert into video(author,url,id_product) values('$author','$url','$id_product')");
					
					header("location:admin.php?controller=video");
				break;
				case 'delete':
				$this->model->execute("delete from video where id=$id");
					header("location:admin.php?controller=video");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_video&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from video where id=$id");
				break;
				case 'do_edit':
					$author=$_POST["author"];
					$url=$_POST["url"];
					$id_product=$_POST["id_product"];
					echo $author." ".$id_product." ".$url;
					$this->model->execute("update video set author='$author', url='$url', id_product='$id_product' where id=$id");
					header("location:admin.php?controller=video");
				break;
			}
			include("view/backend/view_add_edit_video.php");
		}
	}
	new controller_add_edit_video();
 ?>