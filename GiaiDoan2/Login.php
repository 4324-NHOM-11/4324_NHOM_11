<?php 
session_start();
include_once 'dbconnect.php';

if (isset($_POST['submit'])){
	$user = $mysqli->real_escape_string($_POST['user']);
	$pass = $mysqli->real_escape_string($_POST['pass']);
$queryUser = "SELECT * FROM users WHERE username = '{$user}' && password = '{$pass}'";
$resultUser = $mysqli->query($queryUser);
$arUser = mysqli_fetch_assoc($resultUser);
if(is_array($arUser) && (count($arUser))>0){
	$_SESSION['user'] = $arUser['username'];
	$_SESSION['pass'] = $arUser['password'];
	$_SESSION['iduser'] = $arUser['IdUser'];
    $_SESSION['fullname'] = $arUser['FullName'];
	
	header("LOCATION: index.php");
	exit();
}else{
	echo "<p class='error'>Sai tài khoản hoặc mật khẩu</p>";
}
}
?>
<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="css/styles1.css">
 
</head>
<body>
  <a href="../index.php" class="button" id="toggle-login">Về trang chủ</a>

<div id="login">
  <div id="triangle"></div>
  <h1>Đăng nhập admin</h1>
  <form method="post">
    <input type="text" placeholder="Tên đăng nhập" name="user" />
    <input type="password" placeholder="Mật khẩu" name="pass" />
    <input type="submit" value="Đăng nhập" name="submit" />
  </form>
</div>
</body>
</html>