<!DOCTYPE html>
<html lang="en" style="padding-bottom:80px;">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="">
<meta name="author" content="Ellen Schofield">

<link rel="manifest"
	href="<?php echo get_template_directory_uri(); ?>/assets/icons/manifest.json">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="dennis">
<meta name="apple-mobile-web-app-title" content="dennis">
<meta name="theme-color" content="#7f5ca3">
<meta name="msapplication-navbutton-color" content="#7f5ca3">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="msapplication-starturl"
	content="<?php echo site_url('/').'/app'; ?>">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- start: Favicon -->
<link rel="shortcut icon"
	href="<?php bloginfo('template_url') ?>/assets/icons/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-57x57.png'; ?>">
<link rel="apple-touch-icon" sizes="60x60"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-60x60.png'; ?>">
<link rel="apple-touch-icon" sizes="72x72"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-72x72.png'; ?>">
<link rel="apple-touch-icon" sizes="76x76"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-76x76.png'; ?>">
<link rel="apple-touch-icon" sizes="114x114"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-114x114.png'; ?>">
<link rel="apple-touch-icon" sizes="120x120"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-120x120.png'; ?>">
<link rel="apple-touch-icon" sizes="144x144"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-144x144.png'; ?>">
<link rel="apple-touch-icon" sizes="152x152"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-152x152.png'; ?>">
<link rel="apple-touch-icon" sizes="180x180"
	href="<?php echo get_template_directory_uri() . '/assets/icons/apple-icon-180x180.png'; ?>">
<link rel="icon" type="image/png" sizes="192x192"
	href="<?php echo get_template_directory_uri() . '/assets/icons/android-icon-192x192.png'; ?>">
<link rel="icon" type="image/png" sizes="32x32"
	href="<?php echo get_template_directory_uri() . '/assets/icons/favicon-32x32.png'; ?>">
<link rel="icon" type="image/png" sizes="96x96"
	href="<?php echo get_template_directory_uri() . '/assets/icons/favicon-96x96.png'; ?>">
<link rel="icon" type="image/png" sizes="16x16"
	href="<?php echo get_template_directory_uri() . '/assets/icons/favicon-16x16.png'; ?>">
<meta name="msapplication-TileColor" content="#FF850D">
<meta name="msapplication-TileImage"
	content="<?php echo get_template_directory_uri() . '/assets/icons/ms-icon-144x144.png'; ?>">
<meta name="theme-color" content="#FF850D">
<!-- end: Favicon -->
		
		<?php
		// JavaScript
		wp_enqueue_script ( 'jquery' );
		wp_enqueue_script ( 'bootstrap-js' );
		wp_enqueue_script ( 'datepicker-js' );
		?>		
		
		<link rel="stylesheet"
	href="<?php echo get_template_directory_uri() . '/assets/css/bootstrap.min.css'; ?>"
	type='text/css'>
		<?php wp_head(); ?>
		
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type='text/css'>
</head>
<body class="d-flex flex-column h-100">

	<!-- start: Header -->
	<header>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarCollapse" aria-controls="navbarCollapse"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<h2 class="navbar-brand m-0 mr-lg-auto">DogZoneData</h2>
			<!-- <div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Home <span
							class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
					<li class="nav-item"><a class="nav-link disabled" href="#"
						tabindex="-1" aria-disabled="true">Disabled</a></li>
				</ul>
			</div> -->
			<div>
<?php

if (is_user_logged_in ()) {
	global $current_user;
	wp_get_current_user();
	?>
<span class="navbar-text d-none d-lg-inline mx-2">Hi, <?php echo $current_user->user_firstname; ?></span>
				<a href="#" class="btn btn-sm btn-secondary">Log Out</a>
<?php } else {?>
<a href="#" class="btn btn-sm btn-secondary">Log In</a>
<?php  } ?>
			</div>
		</nav>
	</header>
	<!-- end: Header -->


	<main role="main" class="flex-shrink-0">
		<div class="container-fluid" style="padding-top: 75px;">
