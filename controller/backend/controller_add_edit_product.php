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
					$hot_product=isset($_POST["hot_product"])?1:0;
					$id_category=$_POST["id_category"];
					$image=time().$_FILES["image"]["name"];
					if($image!=""){
						$tmp=$_FILES["image"]["tmp_name"];
						$image=time().$image;
						move_uploaded_file($tmp,"public/backend/images/$image");
					}
					$this->model->execute("insert into product(name,price,pricenew,hot_product,image,content,id_category) values('$name','$price','$pricenew','$hot_product','$image','$content','$id_category')");
					
					header("location:admin.php?controller=product");
				break;
				case 'delete':
				$this->model->execute("delete from product where id=$id");
					header("location:admin.php?controller=product");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_product&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from product where id=$id");
				break;
				case 'do_edit':
					$name=$_POST["name"];
					$price=$_POST["price"];
					$pricenew=$_POST["pricenew"];
					$content=$_POST["content"];
					$hot_product=isset($_POST["hot_product"])?1:0;
					$id_category=$_POST["id_category"];
					$this->model->execute("update product set name='$name',price='$price',pricenew='$pricenew',content='$content',hot_product='$hot_product',id_category='$id_category' where id=$id");
					//thực hiện cập nhật ảnh
					// $image=$_FILES["image"]["name"];
					// if($image!=""){
					// 	$old_image=$this->model->get_a_record("select * from product where id=$id");
					// 	unlink("public/backend/images/".$old_image->image);
					// 	$tmp=$_FILES["image"]["tmp_name"];
					// 	$image=time().$image;
					// 	move_uploaded_file($tmp,"public/backend/images/$image");
					// 	$this->model->execute("update product set image='$image' where id=$id");
					// 	echo "update product set image='$image' where id=$id";
					// }
					if(isset($arr->image)&&$arr->image!=""){
					$image=$_FILES["image"]["name"];
					if($image!=""){
						$old_image=$this->model->get_a_record("select * from product where id=$id");
						unlink("public/backend/images/".$old_image->image);
						$tmp=$_FILES["image"]["tmp_name"];
						$image=time().$image;
						move_uploaded_file($tmp,"public/backend/images/$image");
						$this->model->execute("update product set image='$image' where id=$id");
						echo "update product set image='$image' where id=$id";
						
					}
					}
					else{

						$image=$_FILES["image"]["name"];
						if($image!=""){
							$tmp=$_FILES["image"]["tmp_name"];
							$image=time().$image;
							move_uploaded_file($tmp,"public/backend/images/$image");
							$this->model->execute("update product set image='$image' where id=$id");
							echo "update product set image='$image' where id=$id";
							
					}
					}
				
					header("location:admin.php?controller=product");
				break;
			}
			include("view/backend/view_add_edit_product.php");
		}
	}
	new controller_add_edit_product();
 ?>