<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-danger text-white">Add_Edit_Category_Product</div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action?>">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Tên sản phẩm</div>
							<div class="col-md-9"><input required type="text" class="form-control" name="name" value="<?php echo isset($arr->name)?$arr->name:""?>"></div>
						</div>
					</div> 
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Danh mục nhóm sản phẩm</div>
							<div class="col-md-9">
								<select name="id_group">
									<?php $group=$this->model->get_all("select * from group_product");
										foreach ($group as $rows) {
									 ?>
									<option <?php if(isset($arr->id_group)&&$arr->id_group==$rows->id){ ?> selected <?php } ?> value="<?php echo $rows->id_group ?>"><?php echo $rows->name ?></option>
								<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-9"><input type="submit" name="" value="Process" class="btn btn-primary">
							<input type="submit" name="" value="Reset" class="btn btn-danger"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>