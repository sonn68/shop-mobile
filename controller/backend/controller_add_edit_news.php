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
					$img=time().$_FILES["img"]["name"];
					if($img!=""){
						$tmp=$_FILES["img"]["tmp_name"];
						$img=time().$img;
						move_uploaded_file($tmp,"public/news/$img");
					}
					$this->model->execute("insert into news(name,hotnew,img,content,id_category,date,description) values('$name','$hotnew','$img','$content','$id_category','$date','$description')");
					
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
					$img=$_FILES["img"]["name"];
					if($img!=""){
						$old_img=$this->model->get_a_record("select * from news where id=$id");
						unlink("public/news/".$old_img->img);
						$tmp=$_FILES["img"]["tmp_name"];
						$img=time().$img;
						move_uploaded_file($tmp,"public/news/$img");
						$this->model->execute("update news set img='$img' where id=$id");
						echo "update news set img='$img' where id=$id";
					}
					header("location:admin.php?controller=news");
				break;
			}
			include("view/backend/view_add_edit_news.php");
		}
	}
	new controller_add_edit_news();
 ?>