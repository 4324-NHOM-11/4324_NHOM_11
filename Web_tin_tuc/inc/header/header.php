
<?php 
include_once 'inc/dbconnect.php';
?>
<!DOCTYPE ">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tin tức Khánh Hòa</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="Tin Tức Thanh Hóa" />
<meta name="description" content="Tin Tức Thanh Hóa, cập nhật liên tục hằng ngày" />
<link href="styles.css" type="text/css" rel="stylesheet" />

</head>



<body>
		<a name="totop"></a>
	<div class="wrapper">
		<div id="top-nav">
			<div class="main-content">
				<p class="fl"><a href="lienhe.php" title="">Liên Hệ</a></p>
				<p class="fr mail-icon"><a href="admin/Login.php" title="">Đăng nhập</a></p>
				<p class="fr mail-icon"><a href="Admin/DangKyND.php" title="">Đăng ký</a></p>
				<div class="clr"></div>
			</div>
		</div>
	
	
		<div id="top-menu">
			<div class="main-content">
				
				
		<ul>
		
		<?php if ($page == 'home') { ?><li class="parent  current"><a href="index.php" >Trang chủ</a></li> <!-- class current De danh dau trang chu khi minh chon vao-->
		<?php } else { ?><li><a href="index.php" class="parent">Trang chủ</a><?php } ?>
		
		<?php if ($page == 'gioithieu') { ?><li class="parent  current"><a href="gioithieu.php" >Giới thiệu</a></li>
		<?php } else { ?><li><a href="gioithieu.php" class="parent">Giới thiệu</a><?php } ?>
		
		<?php if ($page == 'lienhe') { ?><li class="parent  current"><a href="lienhe.php" >Liên hệ</a></li>
		<?php } else { ?><li><a href="lienhe.php" class="parent">Liên hệ</a><?php } ?>
		
		</ul>
            <div class="clr"></div>
			<div class="clr"></div>
			</div>
		</div>	
	<div id="main-body">
	<div class="main-content">
</body>