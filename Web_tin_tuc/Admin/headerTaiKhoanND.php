<?php

session_start();
ob_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Trang admin tin tức</title>
<link rel="stylesheet" type="text/css" href="css/styles.css"
	media="screen" />
<script src="../js/jquery/jquery.js"></script>
<script src="../js/jquery/jquery.validate.js"></script>
<script language="javascript" src="../js/ckeditor/ckeditor.js"
	type="text/javascript"></script>
<script>
			$.validator.setDefaults({
			submitHandler: function() { alert("submitted!"); }
		});
		
		
		
</script>
</head>
<body>
	<!-- Header -->
	<div id="header">
		<!-- Header. Status part -->
		<div id="header-status">
			<div class="container_12">
				<div class="grid_4">
					<ul class="user-pro">
					<?php
					if(isset($_SESSION['fullname'])){
					$fullname = $_SESSION['fullname'];
					}else{
					$name = "KHÁCH";
					}
					?>
						<li><a href="logout.php">Logout</a></li>
						<li>Chào, <a href=""><?=$fullname?></a></li>
					</ul>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
		<!-- End #header-status -->

		<!-- Header. Main part -->
		<div id="header-main">
			<div class="container_12">
				<div class="grid_12">
					<div id="logo">
						<ul id="nav">
							<li><a href="taikhoan.php" title="">Tài khoản người dùng</a></li>						
						</ul>
					</div>
					<!-- End. #Logo -->
				</div>
				<!-- End. .grid_12-->
				<div style="clear: both;"></div>
			</div>
			<!-- End. .container_12 -->
		</div>
		
	<!-- End #header -->
		<div class="container_12">
<div class="bottom-spacing">
	<!-- Button -->
	
	<div class="clear"></div>
</div>
