<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card" style="margin-top: 15px;">
				<div class="card-header bg-primary text-white">Đăng Ký</div>
				<div class="card-body">
					<form method="post">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Tên tài khoản: </div>
								<div class="col-md-9"><input class="form-control"  type="text" name="username"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Mật khẩu: </div>
								<div class="col-md-9"><input class="form-control" type="password" name="password"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Họ tên: </div>
								<div class="col-md-9"><input class="form-control" type="text" name="name"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Ngày sinh: </div>
								<div class="col-md-9"><input class="form-control" type="date" name="birthday"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Địa chỉ: </div>
								<div class="col-md-9"><input class="form-control" type="text" name="address"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Số điện thoại: </div>
								<div class="col-md-9"><input class="form-control" type="text" name="phone"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"></div>
								<div style="color: red" class="col-md-9"><?php echo isset($rt)?$rt:"" ?></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-9">
									<input type="submit" class="btn btn-primary" name="" value="Đăng Ký">&nbsp;&nbsp;
									<input type="reset" class="btn btn-danger" name="" value="Reset">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>