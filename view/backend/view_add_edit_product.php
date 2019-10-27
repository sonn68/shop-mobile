<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-danger text-white">Add_Edit_product</div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action?>">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Tên sản phẩm</div>
							<div class="col-md-9"><input required type="text" class="form-control" name="name" value="<?php echo isset($arr->name)?$arr->name:""?>"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Ảnh</div>
							<div class="col-md-9"><input type="file" name="img"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Danh mục sản phẩm</div>
							<div class="col-md-9">
								<select name="id_category">
									<?php $category=$this->model->get_all("select * from category_product");
										foreach ($category as $rows) {
									 ?>
									<option <?php if(isset($arr->id_category)&&$arr->id_category==$rows->id){ ?> selected <?php } ?> value="<?php echo $rows->id_category?>"><?php echo $rows->name ?></option>
								<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Giá</div>
							<div class="col-md-9"><input required type="number" name="price" value="<?php echo isset($arr->price)?$arr->price:""?>"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Giá mới</div>
							<div class="col-md-9"><input required type="number" name="pricenew" value="<?php echo isset($arr->pricenew)?$arr->pricenew:""?>"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Nội dung</div>
							<div class="col-md-9">
								<textarea name="content"><?php echo isset($arr->content)?$arr->content:"" ?></textarea>
								<script  type="text/javascript">
										CKEDITOR.replace("content");
								</script>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Sản phẩm nổi bật</div>
							<div class="col-md-9"><input type="checkbox" <?php if(isset($arr->hot_product)&&$arr->hot_product==1){ ?> checked <?php } ?> name="hot_product"></div>
						</div>
					</div>
					<!--  -->
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