<!DOCTYPE html>
<html lang="en">
	<head>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta charset="utf-8">
		<meta name="description" content="<?php echo $local_description; ?>">
		<meta name="keywords" content="<?php echo $local_keywords; ?>">
		<meta name="google-site-verification" content="uTIzu1DUwuFNnwHIMaU-JaiPU2m9eTRLCPA9J-V8qAc" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>
			<?php echo $local_title; ?>
		</title>
		
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/fsd-screen.css" />
		<link rel="shortcut icon" href="/favicon.ico" >
	</head>
	<body>
		<header class="main-header light btcf">
			<span class="fl">frozen solid designs</span>
			<nav class="fr navigation">
				<a href="/" class="<?php if ( $local_pageCode == "main" ) { echo "selected"; } ?>">Home</a> <b>.</b> 
				<a href="/contact/" class="<?php if ( $local_pageCode == "contact" ) { echo "selected"; } ?>">Contact</a>
			</nav>
		</header>
		<section class="main-content">
