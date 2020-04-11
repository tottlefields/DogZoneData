<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="">
<meta name="author" content="Ellen Schofield">

<link rel="manifest"
	href="<?php echo get_template_directory_uri(); ?>/assets/icon/manifest.json">

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
	href="<?php echo get_template_directory_uri() . '/assets/icon/favicon.ico'; ?>">
<link rel="apple-touch-icon" sizes="57x57"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-57x57.png'; ?>">
<link rel="apple-touch-icon" sizes="60x60"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-60x60.png'; ?>">
<link rel="apple-touch-icon" sizes="72x72"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-72x72.png'; ?>">
<link rel="apple-touch-icon" sizes="76x76"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-76x76.png'; ?>">
<link rel="apple-touch-icon" sizes="114x114"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-114x114.png'; ?>">
<link rel="apple-touch-icon" sizes="120x120"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-120x120.png'; ?>">
<link rel="apple-touch-icon" sizes="144x144"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-144x144.png'; ?>">
<link rel="apple-touch-icon" sizes="152x152"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-152x152.png'; ?>">
<link rel="apple-touch-icon" sizes="180x180"
	href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-180x180.png'; ?>">
<link rel="icon" type="image/png" sizes="192x192"
	href="<?php echo get_template_directory_uri() . '/assets/icon/android-icon-192x192.png'; ?>">
<link rel="icon" type="image/png" sizes="32x32"
	href="<?php echo get_template_directory_uri() . '/assets/icon/favicon-32x32.png'; ?>">
<link rel="icon" type="image/png" sizes="96x96"
	href="<?php echo get_template_directory_uri() . '/assets/icon/favicon-96x96.png'; ?>">
<link rel="icon" type="image/png" sizes="16x16"
	href="<?php echo get_template_directory_uri() . '/assets/icon/favicon-16x16.png'; ?>">
<meta name="msapplication-TileColor" content="#FF850D">
<meta name="msapplication-TileImage"
	content="<?php echo get_template_directory_uri() . '/assets/icon/ms-icon-144x144.png'; ?>">
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
</head>
<body>

	<!-- start: Header -->
	<header>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="#">Fixed navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarCollapse" aria-controls="navbarCollapse"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Home <span
							class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
					<li class="nav-item"><a class="nav-link disabled" href="#"
						tabindex="-1" aria-disabled="true">Disabled</a></li>
				</ul>
				<form class="form-inline mt-2 mt-md-0">
					<input class="form-control mr-sm-2" type="text"
						placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</header>
	<!-- end: Header -->