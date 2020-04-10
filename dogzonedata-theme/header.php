<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="">
		<meta name="author" content="Ellen Schofield">

		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/icon/manifest.json">

		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="application-name" content="dennis">
		<meta name="apple-mobile-web-app-title" content="dennis">
		<meta name="theme-color" content="#7f5ca3">
		<meta name="msapplication-navbutton-color" content="#7f5ca3">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta name="msapplication-starturl" content="<?php echo site_url('/').'/app'; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- start: Favicon -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/icon/favicon.ico'; ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-57x57.png'; ?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-60x60.png'; ?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-72x72.png'; ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-76x76.png'; ?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-114x114.png'; ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-120x120.png'; ?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-144x144.png'; ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-152x152.png'; ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/assets/icon/apple-icon-180x180.png'; ?>">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri() . '/assets/icon/android-icon-192x192.png'; ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/assets/icon/favicon-32x32.png'; ?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/assets/icon/favicon-96x96.png'; ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/assets/icon/favicon-16x16.png'; ?>">
		<meta name="msapplication-TileColor" content="#FF850D">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/assets/icon/ms-icon-144x144.png'; ?>">
		<meta name="theme-color" content="#FF850D">
		<!-- end: Favicon -->
		
		<?php
		//JavaScript
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap-js');
		wp_enqueue_script('datepicker-js');
		?>
		
		<?php wp_head(); ?>
       

		<!--[if gte IE 9]>
		<style type="text/css">
			.gradient { filter: none; }
		</style>
		<![endif]-->
		<!--[if lt IE 9]>
		<style type="text/css">
			.account-bar { width:510px!important;}
		</style>
		<![endif]-->
	</head>
	<body>
		<!-- start: Header -->
		
		<nav class="navbar navbar-default navbar-fixed-top">
    		<div class="container-fluid">
    			<div class="navbar-header">
    				<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
    					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
    				</button>
    				<a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>" alt="" class="navbar-brand top-logo" /></a>
    			</div>
    			
    			<div class="collapse navbar-collapse visivle-xs" id="bs-example-navbar-collapse-6">
    				<?php
    				    wp_nav_menu(
    						array(
    							'container' => 'ul',
    							'theme_location' => 'main-menu',
    							'menu_class' => 'nav navbar-nav mobile-nav hidden-sm hidden-md hidden-lg hidden-xl',
    							'link_before' => '<i class="fa"></i>&nbsp;'
    							)
    						);
    					?>
    				<ul class="nav navbar-nav navbar-right navbar-top-links hidden-xs">
    				<?php if(is_user_logged_in()) { 
        				global $current_user;
        				get_currentuserinfo();
        				?>
        				<p class="navbar-text">Hi, <?php echo $current_user->user_firstname; ?></p>
						<!-- <li class="topbar-user"><span style="padding:15px;">Hi, <?php echo $current_user->user_firstname; ?></span></li>  -->
					<?php if(current_user_can('administrator')) { ?>
						<li><a href="<?php echo admin_url(); ?>"><i class="fa fa-lock"></i>Admin</a></li>
					<?php } ?>
						<li><a href="<?php echo wp_logout_url(); ?>"><i class="fa fa-sign-out"></i>Log Out</a></li>
					<?php } else { ?>
						<li><a href="<?php echo wp_login_url(); ?>">Log In</a></li>
					<?php } ?>
					</ul>
    			</div>
    		</div>
    	</nav>
		
		
		
		

		<!-- end: Header -->
		
		<div class="container-fluid">
			<div class="row">
			
    			<nav class="hidden-xs col-sm-2 sidebar hidden-print bg-faded">
    				<?php
    				    wp_nav_menu(
    						array(
    							'container' => 'ul',
    							'theme_location' => 'main-menu',
    							'menu_class' => 'nav nav-pills nav-stacked',
    							'link_before' => '<i class="fa"></i>&nbsp;'
    							)
    						);
    					?>
    			</nav>
				
				<noscript>
					<div class="alert alert-block col-sm-10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>
				
				<!-- start: Content -->
				<main class="col-sm-10 col-sm-offset-2 pt-3">
