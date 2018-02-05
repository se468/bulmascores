<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmascores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/dist/app.css">

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/dist/vendor.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/dist/app.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	

	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<nav class="navbar is-info">
				<div class="container">
				<div class="navbar-brand">
					<a class="navbar-item" href="https://bulma.io">

						<img src="https://bulma.io/images/bulma-logo-white.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">

					</a>
					<div class="navbar-burger burger" data-target="navMenuColorinfo-example">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>

				<div id="navMenuColorinfo-example" class="navbar-menu">
					<div class="navbar-start">
						<a class="navbar-item" href="https://bulma.io/">
							Home
						</a>
						<div class="navbar-item has-dropdown is-hoverable">
							<a class="navbar-link" href="/documentation/overview/start/">
								Docs
							</a>
							<div class="navbar-dropdown">
								<a class="navbar-item" href="/documentation/overview/start/">
									Overview
								</a>
								<a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
									Modifiers
								</a>
								<a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
									Columns
								</a>
								<a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
									Layout
								</a>
								<a class="navbar-item" href="https://bulma.io/documentation/form/general/">
									Form
								</a>
								<hr class="navbar-divider">
								<a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
									Elements
								</a>
								<a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
									Components
								</a>
							</div>
						</div>
					</div>

					<div class="navbar-end">
						<a class="navbar-item" href="https://bulma.io/">
							Home
						</a>
					</div>
				</div>

				</div>
			</nav>
			<!-- #bulma-site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
