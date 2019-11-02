<div class="row justify-content-center">
	<div class="col-md-12">
			<a class="btn btn-primary" style="margin: 5px 0px;" href="admin.php?controller=add_edit_product&act=add">Thêm</a>
		<div class="card">
			<div class="card-header bg-primary text-white">Danh mục sản phẩm</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th>Stt</th>
						<th>Tên sản phẩm:</th>
						<th>Ảnh</th>
						<th>Giá</th>
						<th>Danh mục</th>
						<th>Content</th>
						<th>Hotnew</th>
						<th></th>
					</tr>

					<?php
					$i=1;
					 foreach ($arr as $rows) {
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $rows->name ?></td>
						<td><img style="width: 120px;" src="public/backend/images/<?php echo $rows->image;?>">
							<div><a href="http://localhost/shop-mobile/public/backend/images/<?php echo $rows->image?>">Xem chi tiết hình ảnh</a></div>
							
						</td>
						<td>
							<div><?php echo number_format($rows->pricenew); ?></div>
							<del style="color:red"><?php echo number_format($rows->price); ?></del>
						</td>
						<td><?php 
							$check=$this->model->get_a_record("select * from category_product where id=$rows->id_category");
						 ?><?php 
						 if($check != null) {  echo $check->name;  }
						 if($check == null) {   ?>
						 	<?php $checkfake=$this->model->get_a_record("select * from category_product where id=71"); ?>
						<?php echo $checkfake->name; ?> 
						  <?php	} ?>
						  </td>
						<td><div style="height: 200px;"><?php echo $rows->content ?></div></td>
						<td><?php echo $rows->hot_product ?></td>
						<td>
							<a href="admin.php?controller=add_edit_product&act=delete&id=<?php echo $rows->id?>">Delete</a>&nbsp;&nbsp;<a href="admin.php?controller=add_edit_product&act=edit&id=<?php echo $rows->id?>">Edit</a>
						</td>
					</tr>
				<?php $i++; } ?>
				</table>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang: </a></li>
						<?php 
							for($i=1;$i<=$numpage;$i++){
						 ?>
						
						<li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php echo $i; ?>"> <?php echo $i; ?></a></li>

						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>