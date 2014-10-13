<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-connectedbenefits-com" data-template-set="connected-benefits-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<meta name="google-site-verification" content="">
	
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	
</head>

<body <?php body_class('cbp-spmenu-push'); ?>>

	<div id="wrapper">
		<header id="header" class="nav-down">
			<div class="header-holder">
				<div class="logo">
					<a href="/"><img src="<?php bloginfo('template_url');?>/_/img/logo.png" alt="Connected Benefits" width="283" height="38"></a>
				</div>
				<div class="header-right">
					<nav id="nav">
						<a id="showRightPush" class="opener" style="cursor:pointer"><span>Menu</span></a>
						<ul>
							<li <?php if (is_page('35')) echo('class="active"') ?>><a href="/tour">Tour</a></li>
							<li <?php if (is_page('12')) echo('class="active"') ?>><a href="/about-us">About Us</a></li>
							<li <?php if (is_page('37')) echo('class="active"') ?>><a href="/contact-us">Contact Us</a></li>
						</ul>
					</nav>
					
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right mobilenav" id="cbp-spmenu-s1">	
						<a id="closeRightPush" class="disabled"></a>
						<h3>Menu</h3>
							<a href="/">Home</a>
							<a href="/tour">Tour</a>
							<a href="/about-us">About Us</a>
							<a href="/contact-us">Contact Us</a>
					</nav>
					
					<div class="btn-holder">
						<a href="#scheduledemo" class="popup">Schedule Demo</a>
					</div>
				</div><!--/header-right-->
			</div><!--/header-holder-->
		</header>