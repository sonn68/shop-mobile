<div class="row justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white">Khách hàng liên hệ</div>	
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-hover table-bordered">
						<tr>
							<th>STT</th>
							<th>Tên người dùng</th>
							<th>Sản phẩm phản hồi</th>
							<th>Subject</th>
							<th>Nội dung</th>
							<th>Thời gian</th>
						</tr> 

						<?php
						$i=1;
						 foreach ($arr as $rows) {
						?>
						<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $rows->username;?></td>
								<td><?php 
								$check=$this->model->get_a_record("select * from product where id=$rows->id_product");
							 ?><?php echo $check->name; ?></td>
								  
							 	<td><?php echo $rows->subject;?></td>
								<td><textarea style="width: 200px;"><?php echo $rows->content; ?></textarea></td> 
								<td><?php echo $rows->time;?></td>
							</tr>
						<?php $i++; } ?>

					</table>
					<!--======== -->
					<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang: </a></li>
						<?php 
							for($i=1;$i<=$numpage;$i++){
						 ?>
						
						<li class="page-item"><a class="page-link" href="admin.php?controller=contact&p=<?php echo $i; ?>"> <?php echo $i; ?></a></li>

						<?php } ?>
					</ul>
				</div>
				</div>
			</div>	
	</div>
	</div>
</div>
