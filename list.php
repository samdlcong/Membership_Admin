<?php
$mysqli= new mysqli('localhost','root','123456','huaming');
if($mysqli->connect_errno){
	die('ERROR: '.$mysqli->connect_error);
}else{
	$mysqli->set_charset('utf8');
}
$sql = "select username,age from member";
$res = $mysqli->query($sql);
if($res && $res->num_rows>0){
	while($row=$res->fetch_assoc()){
		$rows[]=$row;
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>花名册列表</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<style type="text/css">

	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="page-header ">花名册后台管理<span><a href="./reg.php" class="label label-primary pull-right">注册</a></span></h3>
			<table class="table table-striped">
				
				<tr>
					<th>序号</th>
					<th>姓名</th>
					<th>年龄</th>
					<th>操作</th>
				</tr>
				<?php $i=1;foreach($rows as $arr):?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $arr['username'] ?></td>
					<td><?php echo $arr['age']?></td>
					<td><a type="button" class="btn btn-primary btn-xs" href="./edit.php">修改</a>&nbsp;<a type="button" class="btn btn-danger btn-xs del" href="./doAction.php?act=delUser">删除</a></td>
				</tr>
			    <?php $i++;endforeach;?>
				
			</table>
			<nav>
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
<script src="./js/bootstrap.js"></script>
<script>
	$(document).ready(function(){
		$('.del').click(function(){
			alert("确定删除吗？");
		});
	});
</script>	
</body>
</html>