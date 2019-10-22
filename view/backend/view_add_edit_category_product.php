<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-danger text-white">Add_Edit_Category_Product</div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action?>">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Tên thể loại</div>
							<div class="col-md-9"><input required type="text" class="form-control" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""?>"></div>
						</div>
					</div> 
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Danh mục sản phẩm</div>
							<div class="col-md-9">
								<select name="group_product_id">
									<?php $category=$this->model->get_all("select * from category_product");
										foreach ($category as $rows) {
									 ?>
									<option <?php if(isset($arr->group_product_id)&&$arr->group_product_id==$rows->group_product_id){ ?> selected <?php } ?> value="<?php echo $rows->group_product_id?>"><?php echo $rows->c_name ?></option>
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