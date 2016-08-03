<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compitible" content="IE=edge">
	<meta name="viewport" content="width=deivice-width,initial-scale=1">
	<title>后台管理</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="page-header">后台管理</h3>
			<form action="doAction.php?act=addUser" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="username" class="col-md-2 control-label">姓名</label>
					<div class="col-md-4">
						<input type="text" class="form-control" name="username" id="username">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-md-2 control-label">密码</label>
					<div class="col-md-4">
						<input type="password" class="form-control" name="password" id="password">
					</div>
				</div>
				<div class="form-group">
					<label for="age" class="col-md-2 control-label">年龄</label>
					<div class="col-md-4">
						<input type="text" class="form-control" name="age" id="age">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<button type="submit" class="btn btn-primary">提交</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>




<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>	
<script src="./js/bootstrap.css"></script>
</body>
</html>