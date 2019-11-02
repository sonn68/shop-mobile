<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-danger text-white">Phân quyền User</div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action?>">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Chức năng</div>
							<div class="col-md-9">
								<select name="role">
									<option>admin</option>
									<option>customer</option> 
								</select>
							</div>
						</div>
					</div> 
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-9"><input type="submit" name="" value="Process" class="btn btn-primary">
							 </div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>