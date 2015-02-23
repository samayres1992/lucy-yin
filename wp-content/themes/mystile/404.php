<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php get_header(); ?>
       
    <div id="content" class="col-full">
    	
    	<?php woo_main_before(); ?>
    
			
				<header>
                	<h1 id="mywork"><?php _e( 'Error 404!', 'woothemes' ); ?></h1>
                </header>
                <section style="min-height: 450px;">
                    <div class="woocommerce">
                	       <span class="notfound"><?php _e( 'The page you trying to reach does not exist, or has been moved.', 'woothemes' ); ?></span>
                    </div>
                </section>
            </div><!-- /.post -->
                                                
        </section><!-- /#main -->
        
        <?php woo_main_after(); ?>

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
