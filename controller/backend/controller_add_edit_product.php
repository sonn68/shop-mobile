<?php 
	class controller_add_edit_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_edit_product&act=do_add";
				break;
				case 'do_add':
					$name=$_POST["name"];
					$price=$_POST["price"];
					$pricenew=$_POST["pricenew"];
					$content=$_POST["content"];
					$hotnew=isset($_POST["hotnew"])?1:0;
					$id_category=$_POST["id_category"];
					$img=time().$_FILES["img"]["name"];
					if($img!=""){
						$tmp=$_FILES["img"]["tmp_name"];
						$img=time().$img;
						move_uploaded_file($tmp,"public/backend/images/$img");
					}
					$this->model->execute("insert into product(name,price,pricenew,hotnew,img,content,id_category) values('$name','$price','$pricenew','$hotnew','$img','$content','$id_category')");
					
					header("location:admin.php?controller=product");
				break;
				case 'delete':
				$this->model->execute("delete from product where product_id=$id");
					header("location:admin.php?controller=product");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_product&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from product where product_id=$id");
				break;
				case 'do_edit':
					$name=$_POST["name"];
					$price=$_POST["price"];
					$pricenew=$_POST["pricenew"];
					$content=$_POST["content"];
					$hotnew=isset($_POST["hotnew"])?1:0;
					$id_category=$_POST["id_category"];
					$this->model->execute("update product set name='$name',price='$price',pricenew='$pricenew',content='$content',hotnew='$hotnew',id_category='$id_category' where product_id=$id");
					//thực hiện cập nhật ảnh
					$img=$_FILES["img"]["name"];
					if($img!=""){
						$old_img=$this->model->get_a_record("select * from product where product_id=$id");
						unlink("public/backend/images/".$old_img->img);
						$tmp=$_FILES["img"]["tmp_name"];
						$img=time().$img;
						move_uploaded_file($tmp,"public/backend/images/$img");
						$this->model->execute("update product set img='$img' where product_id=$id");
						echo "update product set img='$img' where product_id=$id";
					}
					header("location:admin.php?controller=product");
				break;
			}
			include("view/backend/view_add_edit_product.php");
		}
	}
	new controller_add_edit_product();
 ?>