<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options, $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if ( $woo_options['woo_boxed_layout'] == 'true' ) echo 'boxed'; ?> <?php if (!class_exists('woocommerce')) echo 'woocommerce-deactivated'; ?>">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" href="/wp-includes/css/reset.css" >
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
<link rel="stylesheet" href="/wp-content/themes/mystile/css/base.css" type="text/css" media="all">
<!--[if lt IE 9 ]><link rel="stylesheet" href="./css/720_grid.css" type="text/css"><![endif]-->
<link rel="stylesheet" href="/wp-content/themes/mystile/css/720_grid.css" type="text/css" media="screen and (min-width: 720px)">
<link rel="stylesheet" href="/wp-content/themes/mystile/css/986_grid.css" type="text/css" media="screen and (min-width: 986px)">
<link rel="stylesheet" href="/wp-content/themes/mystile/css/1236_grid.css" media="screen and (min-width: 1236px)" >
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	wp_head();
	woo_head();
?>

</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">

	<div id="top">
		<nav class="col-full" role="navigation">
			<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'top-menu' ) ) { ?>
			<?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'top-nav', 'menu_class' => 'nav fl', 'theme_location' => 'top-menu' ) ); ?>
			<?php } ?>
			<?php
				if ( class_exists( 'woocommerce' ) ) {
					echo '<ul class="nav wc-nav">';
					woocommerce_cart_link();
					echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';
					echo '</ul>';
				}
			?>
		</nav>
	</div><!-- /#top -->



    <?php woo_header_before(); ?>


	<?php woo_content_before(); ?>
