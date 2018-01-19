<?php
require_once 'php_action/core.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Stock Management System</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <!-- bootstrap theme -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="custom/css/custom.css" />
    <!-- dataTables -->
    <link rel="stylesheet" href="assets/plugins/dataTables/dataTables.min.css" />
    <!-- fileinput -->
    <link rel="stylesheet" href="assets/plugins/fileinput/css/fileinput.min.css" />
    <!-- jquery -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- jqueryui -->
    <script type="text/javascript" src="assets/jqueryui/jquery-ui.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <script defer src="assets/font-awesome/js/fa-brands.js"></script>
    <script defer src="assets/font-awesome/js/fa-solid.js"></script>
    <script defer src="assets/font-awesome/js/fa-regular.js"></script>
    <script src="assets/font-awesome/js/fontawesome.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul id="navSetting" class="nav navbar-nav navbar-right">
					<li id="navDashboard">
						<a href="index.php"><i class="fas fa-list-alt"></i> Dashboard </a>
					</li>
					<li id="navBrand">
						<a href="brand.php"><i class="fab fa-btc"></i> Brand </a>
					</li>
					<li id="navCategories">
						<a href="categories.php"><i class="fas fa-th-list"></i> Category </a>
					</li>

					<li id="navOrder" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-shopping-cart"></i> Orders <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li id="topNavAddOrder"><a href="orders.php?o=add"><i class="fas fa-plus"></i> Add Orders</a></li>
							<li id="topNavManageOrder"><a href="orders.php?o=manord"><i class="fas fa-edit"></i> Manage Orders</a></li>
						</ul>
					</li>
					<li id="navReport"><a href="report.php"><i class="fas fa-check"></i> Report </a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user"></i> 
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="setting.php"><i class="fas fa-wrench"></i> Setting </a></li>
							<li><a href="logout.php"><i class="fas fa-log-out"></i> Logout </a></li>
						</ul></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	<div class="container">
