<?php
include_once 'dbconnect.php';
session_start();
ob_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Trang admin tin tức</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
<script language="javascript" src="../js/ckeditor/ckeditor.js"
	type="text/javascript"></script>
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
						<li>Chào: <a href=""><?=$fullname?></a></li>
					</ul>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
		<!-- End #header-status -->

		<!-- Header. Main part -->
		<div id="header-main"></div<!-- Header. Main part -->
			<div class="container_12">
				<div class="grid_12">
					<div id="logo">
						<ul id="nav">
							<li id="current"><a href="index.php" title="">Quản trị</a></li>
							<li><a href="taikhoan.php">Tài khoản</a></li>
						</ul>
					</div>
					<!-- End. #Logo -->
				</div>
				<!-- End. .grid_12-->
				<div style="clear: both;"></div>
			</div>
			<!-- End. .container_12 -->
		</div>
		
		<!-- End #header-main -->
		<div style="clear: both;"></div>
		<!-- Sub navigation -->
		<div id="subnav">
			<div class="container_12">
				<div class="grid_12">
					<ul>
						<li><a href="list.php">Tin Tức</a></li>
						<li><a href="danhmuc.php">Danh mục</a></li>
						<li><a href="gioithieu.php">Giới thiệu</a></li>
						<li><a href="lienhe.php">Liên hệ</a></li>
					</ul>

				</div>
				<!-- End. .grid_12-->
			</div>
			<!-- End. .container_12 -->
			<div style="clear: both;"></div>
		</div>
		<!-- End #subnav -->
	</div>
	<!-- End #header -->

	<div class="container_12">