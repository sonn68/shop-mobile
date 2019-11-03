<div>
	<div>Bạn đã đặt hàng thành công</div>
	<div>--------------------------</div>
	<div>
		<div class="row">
			<div class="col-md-4">Mã đơn hàng</div>
			<div class="col-md-8"><?php echo $check->id ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Họ và tên</div>
			<div class="col-md-8"><?php echo $tx->name ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Số điện thoại</div>
			<div class="col-md-8"><?php echo $check->phone ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Địa chỉ</div>
			<div class="col-md-8"><?php echo $check->address ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Tổng tiền phải trả</div>
			<div class="col-md-8"><?php echo number_format($check->price) ?> VNĐ</div>
		</div>
		<div class="row">
			<div class="col-md-4">Thời gian đặt hàng</div>
			<div class="col-md-8"><?php echo $check->date ?></div>
		</div>
		<div>Chi tiết đơn hàng</div>
			<table>
				<tr>
					<th >Mã sản phẩm</th>
					<th >Tên sản phẩm</th>
					<th>Đơn giá</th>
					<th >Số lượng</th>
				</tr>
				<tr>
					<td style="width: 120px;text-align: center"><?php echo $check->id_product ?></td>
					<td ><a href="san-pham/detail/<?php echo $check->id_product?>"><?php $name=$this->model->get_a_record("select * from product where id=$check->id_product"); echo $name->name;?></a></td>
					<td style="text-align: center;"><?php $name=$this->model->get_a_record("select * from product where id=$check->id_product"); echo number_format($name->pricenew) ?> VNĐ</td>
					<td style="width: 120px;text-align: center"><?php echo $check->quantity ?></td>

				</tr>
			</table>
			<!-- <div><a style="color: red;text-decoration: none;" href="trang-chu"><?php //unset($_SESSION["order_id"]) ?>Tiếp tục mua hàng</a></div> -->
	</div>
</div>