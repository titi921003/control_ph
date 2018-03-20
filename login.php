<?php
header("Content-type:text/html;charset=utf-8");
$user = $_POST['zhanghao'];
$pass = $_POST['pass'];
//echo $user;
$db = new mysqli('Localhost','root','','wui1711');
$sql = "select zhanghao,pass from user where zhanghao='$user'";
$result = $db -> query($sql);
$row = $result -> fetch_assoc();
//var_dump($row);
if($row){
	if($pass == $row['pass']){
		$message = '登陆成功';
		$href = 'index.html';
	}else{
		$message = '密码错误';
		$href = 'login.html';
	}
}else{
	$message = '账号错误';
	$href = 'login.html';
}
include_once "transfer-page.html";
?>

