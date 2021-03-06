	<section class="landing">
		<span class="howls-castle">	
			<span class="hello">
				<img class="logo" src="/wp-content/themes/mystile/images/logo.png" />
				<h1><span class="l">Lucy</span> <span class="y">Yin</span></h2>
			</span>
			<h2 class="hello-description">
				Freelance Artist
			</h2>
			<span class="contactme">
				<i class="icon-download"></i>
				<!--<i class="icon-envelope"></i>-->
			</span>
		</span>
	</section>
	<?php
	$query_images_args = array(
		'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1,
	);
	
	$query_images = new WP_Query( $query_images_args );
	$images = array();
	foreach ( $query_images->posts as $image) {
		$url = $image->guid;
		$title = $image->post_title;
	
		array_push($images, array('url' => $url, 'title' => $title));
	}
	?>
	<section class="portfolio portfolio-top">
		<h1 class="portfoliowork">My Work</h1>
		<div class="grid">
			<?php
				$count = 1;
				foreach($images as $image) {
					if($count === 1) {
						echo('<div class="row">');
						$slot = '<div class="slot-0-1 portfolio-post">';
					}
					if ($count === 2) {
						$slot = '<div class="slot-2-3 portfolio-post">';
					}
					
					if ($count === 3) {
						$slot = '<div class="slot-4-5 portfolio-post">';
					}
					echo($slot . '<span class="desc">'. $image['title'] .'</span>
							<img class="gallery-image" src="'. $image['url'] .'" alt="gallery" />
						</div>
					');
					if ($count === 3) {
						echo('</div>');
					}
					$count++;
					if($count === 4) {
						$count = 1;
					}
				}
			?>
	
		</div>
		<div id="loadMore">Load More</div>
	</section>
</div>

<?php get_footer(); ?>
