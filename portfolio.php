<?php
/**
 * Template Name: Portfolio Page (w Cats)
 *
 * A custom page template without withe Pieces and their respective Categories
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 get_header(); ?>  
<?php error_reporting(E_ALL); ?>
<?php get_header(); ?>  
<div id="content" class="piece portfolio masonry-container">
		<?php
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 
				'post_type' => 'post', 
				'paged' => $page, 
				'orderby' => 'menu_order date', 
				'order' => 'ASC', 
				'posts_per_page' => 48, 
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			$default = array('class'	=> "worksimg",);
				if ( has_post_thumbnail() ) {  // check if the post has a Post Thumbnail assigned to it. 
					?>
					<a class="piece_div" href="<?php echo get_permalink(get_the_ID());?>">
						<h2 class="piece_title_home"><?php the_title();?></h2>
						<?php the_post_thumbnail('large', $default); ?>
					</a>
					<?php
				} 
				else { ?>
						<a class="piece_div" href="<?php echo get_permalink(get_the_ID());?>">
							<h2 class="piece_title_home">
								<?php the_title();?>
							</h2>
						</a>
				<?php
				}
			endwhile;
			?>
<?php get_footer(); ?> 