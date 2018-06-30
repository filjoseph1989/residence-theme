<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eden
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<div id="main">
			<header id="header" class="header_fullwidth">
				<div class="header_mid" data-height="70">
					<div class="header_mid_outer">
						<div class="header_mid_inner">
							<div class="cmsmasters_header_button_wrap">
								<a href="#requestResidenceModal" id="request-residence" class="cmsmasters_header_button">
									REQUEST RESIDENCE
								</a>
							</div>
							<div class="logo_wrap">
								<a href="<?php esc_url( home_url( '/' ) ); ?>" title="Eden Residence" class="logo">
									<div class="">
										<img src="<?php echo bloginfo('template_url'); ?>/img/header_logo.svg" alt="">
										<div class=""></div>
									</div>
								</a>
								<a href="<?php esc_url( home_url( '/' ) ); ?>" title="Eden Residence" class="logo logo_small">
									<div class=""><?php echo bloginfo('name'); ?></div>
								</a>
							</div>
							<div class="resp_mid_nav_wrap">
								<div class="resp_mid_nav_outer">
									<a class="responsive_nav resp_mid_nav" href="javascript:void(0)">
										<span></span>
									</a>
								</div>
							</div>
							<div class="mid_nav_wrap">
								<nav>
									<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'navigation',
											'menu_class'     => 'mid_nav navigation'
										) );
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
