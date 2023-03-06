<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= , initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body >
	<nav class="navbar navbar-expand-lg navbar-info bg-info" >
		<h5 class="text-green" style="margin:10px;">Hệ thống quản lý bệnh viện</h5>

		<div class="mr-auto" style="margin-right:auto;"></div>

		<ul class="navbar-nav"  >
			<?php 
				if(isset($_SESSION['admin'])){
					$user = $_SESSION['admin'];
					echo'
					<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
					<li class="nav-item"><a href="logout.php" class="nav-link text-white">Đăng xuất</a></li>
					';
				}else{
					echo '
					<li class="nav-item"><a href="/hms/adminlogin.php" class="nav-link text-white">Admin</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-white">Bác sĩ</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-white">Bệnh nhân</a></li>
					';
				}
			?>
		</ul>

	</nav>
	
</body>
</html>