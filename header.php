<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _source
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_source' ); ?></a>

<!-- Page Top Widget Area -->
	<?php if ( is_active_sidebar( 'page_top_widgets' ) ) : ?>
		<div id="page-top-widgets" class="page-top widget-area" role="complementary">
			<div class="inner"><?php dynamic_sidebar( 'page_top_widgets' );?></div>
		</div>
	<?php endif;?>

	<header id="masthead" class="site-header" role="banner">

<!-- Site Branding -->
		<div id="site-branding">
			<div class="inner clear">
				<div id="logo"><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a></div>
				</div> <!-- .inner -->
		</div><!-- .site-branding -->

<!-- Page Banner Widget Area -->
		<?php if ( is_active_sidebar( 'page_banner_widgets' ) && is_front_page() ) : ?>
				<div id="page-banner" class="page-banner widget-area" role="complementary">
					<?php dynamic_sidebar( 'page_banner_widgets' );?>
				</div>
		<?php endif;?>

<!-- Site Navigation -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="inner clear">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#9776; Menu', '_source' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</div> <!-- .inner -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<!-- Content start -->
	<div id="content" class="site-content">
		<div class="inner row">
			<div id="primary" class="content-area col-xs-12 col-md">
				<main id="main" class="site-main" role="main">
