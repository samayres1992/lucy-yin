<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

 global $product;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>
<?php 
    if($product->post->post_content) {
        echo('<span class="product_description_single">' . $product->post->post_content . '</span>');
    }
?>
