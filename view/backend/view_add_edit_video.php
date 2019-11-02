<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-danger text-white">Add_Edit_video</div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action?>">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Tác giả</div>
							<div class="col-md-9"><input required type="text" class="form-control" name="author" value="<?php echo isset($arr->author)?$arr->author:""?>"></div>
						</div>
					</div> 
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Danh mục sản phẩm</div>
							<div class="col-md-9">
								<select name="id_product">
									<?php $product=$this->model->get_all("select * from product");
										foreach ($product as $rows) {
									 ?>
									<option <?php if(isset($arr->id)&&$arr->id_product==$rows->id){ ?> selected <?php } ?> value="<?php echo $rows->id?>"><?php echo $rows->name ?></option>
								<?php } ?>
								</select>
							</div>
						</div>
					</div> 
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Đường dẫn</div>
							<div class="col-md-9">
								<textarea name="url" class="form-control"><?php echo isset($arr->url)?$arr->url:"" ?></textarea></div>  
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-9"><input type="submit" name="" value="Process" class="btn btn-primary">
							<input type="reset" name="" value="Reset" class="btn btn-danger"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>