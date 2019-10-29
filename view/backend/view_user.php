<div class="row justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white">Thông tin tài khoản</div>	
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
						<img style="width: 250px;height: 200px;border: 1px solid black"  src="public/backend/images/avt/<?php echo $row->img?>">
						<div style="padding-left: 50px;">Ảnh đại diện</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					<div class="row">
						<div class="col-md-4">Họ và tên: </div>
						<div class="col-md-8"><input disabled class="form-control" type="text" name="name" <?php if(isset($row->name)&&$row->name!=""){ ?> value="<?php echo $row->name?>" <?php }else{ ?>placeholder="Chưa có thông tin"<?php }?> ></div>
					</div>
					</div>
					<!-- ======= -->
					<div class="form-group">
					<div class="row">
						<div  class="col-md-4">Địa chỉ: </div>
						<div class="col-md-8"><input disabled type="text" class="form-control" <?php if(isset($row->address)&&$row->address!=""){ ?> value="<?php echo $row->address?>" <?php }else{ ?>placeholder="Chưa có thông tin"<?php }?> ></div>
					</div>
					</div>
					<div class="form-group">
					<div class="row">
						<div class="col-md-4">Ngày sinh: </div>
						<div class="col-md-8"><input disabled type="text" class="form-control" <?php if(isset($row->birthday)&&$row->birthday!=""){ ?> value="<?php echo $row->birthday?>" <?php }else{ ?>placeholder="Chưa có thông tin"<?php }?> ></div>
					</div>
					</div>
					<!--======== -->
					<div class="form-group">
					<div class="row">
						<div class="col-md-4"> </div>
						<div class="col-md-8"><a href="admin.php?controller=edit_user&act=edit&id=<?php echo $row->id?>">Sửa thông tin cá nhân.</a></div>
					</div>
					</div>
				</div>
			</div>	
	</div>
	</div>
</div>
