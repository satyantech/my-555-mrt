<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="SSS-Admin">
	<meta name="keywords" content="<?php echo $keywords?>">
	<meta name="description" content="<?php echo $description?>">	
	
	<title><?php echo $title?></title>
	
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo $this->config->item('assets_url') ?>css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">
	
	<!-- CSS Files -->
	<link href="<?php echo $this->config->item('assets_url') ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $this->config->item('assets_url') ?>css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo $this->config->item('assets_url') ?>css/style.css" rel="stylesheet">
	<link href="<?php echo $this->config->item('assets_url') ?>css/responsive.css" rel="stylesheet">
	
	
</head>
<body>
	<!-- Header Section Starts -->
	<header id="header-area">
		<?php $this->load->view('layout/header'); ?> 
		
		<!-- Main Menu Starts -->
			<?php $this->load->view('layout/nav'); ?>
		<!-- Main Menu Ends -->
	</header>
	<!-- Header Section Ends -->
	<!-- Main Container Starts -->
		<?php $this->load->view('shop/'.$content); ?>
	<!-- Main Container Ends -->			
	<!-- Footer Section Starts -->
		<footer id="footer-area">
		<!-- Footer Links Starts -->
			<?php $this->load->view('layout/footer'); ?>
		<!-- Copyright Area Ends -->
		</footer>
	<!-- Footer Section Ends -->
<!-- JavaScript Files -->

<script src="<?php echo $this->config->item('assets_url') ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $this->config->item('assets_url') ?>js/jquery-migrate-1.2.1.min.js"></script>	
<script src="<?php echo $this->config->item('assets_url') ?>js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->item('assets_url') ?>js/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo $this->config->item('assets_url') ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $this->config->item('assets_url') ?>js/owl.carousel.min.js"></script>
<script src="<?php echo $this->config->item('assets_url') ?>js/custom.js"></script>
</body>


</html>