<?php
header("Content-type:text/html;charset=utf-8");
$mysqli = new mysqli('localhost','root','123456','huaming');
if($mysqli->connect_errno) {
	die("ERROR: ".$mysqli->connect_error);
}else{
	$mysqli->set_charset('utf8');
}

$sql=<<<EOF
	create table if not exists member(
		id tinyint unsigned auto_increment key,
		username varchar(20) not null,
		password char(32) not null,
		age tinyint unsigned default 18
	);
EOF;
$res=$mysqli->query($sql);
//var_dump($res);
if($res){
	echo '创建数据库成功';
}

?>