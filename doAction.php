<?php
header("Content-type:text/html;charset=utf-8");
$mysqli = new mysqli('localhost','root','123456','huaming');
if($mysqli->connect_errno){
	die("ERROR: ".$mysqli->connect_error);
}else{
	$mysqli->set_charset('utf8');
}
$username=$_POST['username'];
$username=$mysqli->escape_string($username);//转义字符
$password=md5($_POST['password']);
$age=$_POST['age'];
$act=$_GET['act'];

switch($act){
	case 'addUser':
	//echo '添加用户';
	$sql="insert member(username,password,age) values('{$username}','{$password}','{$age}')";
	//echo $sql;exit();
	$res = $mysqli->query($sql);

	if($res){
		$insert_id= $mysqli->insert_id;
		echo "<script>
			alert('添加成功，网站的第{$insert_id}位用户');
			location.href='list.php';
		</script>";
	}else{
		echo "<script>
			alert('添加失败，重新添加');
			location.href='reg.php';
		</script>";
	}
	break;
}









?>