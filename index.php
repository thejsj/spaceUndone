<?php error_reporting(E_ALL); ?>
<?php get_header(); ?>  
	<div id="content">
		<?php
			$page = (get_query_var('paged'))
			? get_query_var('paged') : 0;
			$args = array( 'post_type' => 'post', 'paged' => $page, 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 55, );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				if ( has_post_thumbnail() ) {  // check if the post has a Post Thumbnail assigned to it. 
					?>
					<a class="piece_div" href="<?php echo get_permalink(get_the_ID());?>">
						<h2 class="piece_title_home">
							<?php 					
							echo(get_the_title()); 
							?>
						</h2>
						<?php 
						$default = array(
							'class'	=> "worksimg",
						);
						the_post_thumbnail('large', $default); ?>
					</a>
					<?php
				} 
			endwhile; 
			?>
	</div>
<?php get_footer(); ?>  