<?php 
	class controller_add_edit_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_edit_news&act=do_add";
				break;
				case 'do_add':
					$name=$_POST["name"];
					$date=date('Y-m-d H:i');
					$description=$_POST["description"];
					$content=$_POST["content"];
					$hotnew=isset($_POST["hotnew"])?1:0;
					$id_category=$_POST["id_category"];
					$image=time().$_FILES["image"]["name"];
					if($image!=""){
						$tmp=$_FILES["image"]["tmp_name"];
						$image=time().$image;
						move_uploaded_file($tmp,"public/news/$image");
					}
					$this->model->execute("insert into news(name,hotnew,image,content,id_category,date,description) values('$name','$hotnew','$image','$content','$id_category','$date','$description')");
					
					header("location:admin.php?controller=news");
				break;
				case 'delete':
				$this->model->execute("delete from news where id=$id");
					header("location:admin.php?controller=news");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_news&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from news where id=$id");
				break;
				case 'do_edit':
					$name=$_POST["name"];
					$date=date('Y-m-d H:i');
					$description=$_POST["description"];
					$content=$_POST["content"];
					$hotnew=isset($_POST["hotnew"])?1:0;
					$id_category=$_POST["id_category"];
					$this->model->execute("update news set name='$name',description='$description',content='$content',hotnew='$hotnew',id_category='$id_category',date='$date' where id=$id");
					//thực hiện cập nhật ảnh
					$image=$_FILES["image"]["name"];
					if($image!=""){
						$old_image=$this->model->get_a_record("select * from news where id=$id");
						unlink("public/news/".$old_image->image);
						$tmp=$_FILES["image"]["tmp_name"];
						$image=time().$image;
						move_uploaded_file($tmp,"public/news/$image");
						$this->model->execute("update news set image='$image' where id=$id");
						echo "update news set image='$image' where id=$id";
					}
					header("location:admin.php?controller=news");
				break;
			}
			include("view/backend/view_add_edit_news.php");
		}
	}
	new controller_add_edit_news();
 ?>