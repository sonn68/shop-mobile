<div class="row justify-content-center">
	<div class="col-md-6">
		<a class="btn btn-primary" style="margin: 5px 0px;" href="admin.php?controller=add_edit_group_product&act=add">Add</a>
		<div class="card">
			<div class="card-header bg-primary text-white">Danh sách group sản phẩm</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th>Stt</th>
						<th>Tên</th>
						<th></th>
					</tr>
					<?php 
						$stt=1;
						foreach ($arr as $rows) {
					 ?>
					<tr>
						<td><?php echo $stt ?></td>
						<td><?php echo $rows->name; ?></td>
						<td><a href="admin.php?controller=add_edit_group_product&act=delete&id=<?php echo $rows->id?>">delete</a>&nbsp;|&nbsp;<a href="admin.php?controller=add_edit_group_product&act=edit&id=<?php echo $rows->id?>">edit</a></td>
					</tr>
				<?php $stt++; ?>
				<?php } ?>
				</table>
				
			</div>
		</div>
	</div>
</div>