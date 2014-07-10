<!doctype html>
<html lang="eng">
	<head>
		<title> SisAlbatroz </title>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/style.css" />

		<script type="text/javascript" src="<?=base_url()?>public/js/jquery.js"></script>
		<script type="text/javascript" src="<?=base_url()?>public/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?=base_url()?>public/js/jrdash/dashboard/result.js"></script>
		<script type="text/javascript" src="<?=base_url()?>public/js/jrdash/dashboard/event.js"></script>
		<script type="text/javascript" src="<?=base_url()?>public/js/jrdash/dashboard/template.js"></script>
		<script type="text/javascript" src="<?=base_url()?>public/js/jrdash/dashboard.js"></script>
		<script>
			$(function() {
				// Init the Dashboard Application
				var dashboard = new Dashboard();
			});
		</script>
	</head>
	<body>

		
		<nav class="navbar">
			<div class="navbar-inner">
				<span class="brand"> SisAlbatroz </span>
				<ul class="nav">
					<li><a href="#"> Dashboard </a></li>
					<li><a href="#"> User </a></li>
					<li><a href="<?=site_url('dashboard/logout')?>"> Logout </a></li>
				</ul>
			</div>
		</nav>



		<!-- Start: wrapper -->
		<div class="wrapper"> 