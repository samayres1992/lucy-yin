<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Product Description', 'woocommerce' ) ) );
add_action( 'woocommerce_after_shop_loop_item_title', 'obox_woocommerce_product_excerpt', 35, 2); 
if (!function_exists('obox_woocommerce_product_excerpt'))  
{ 
     function lk_woocommerce_product_excerpt()  
     { 
     echo '<span class="excerpt">'; 
     the_excerpt(); 
     echo '</span>'; 
     } 
}
?>
