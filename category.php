<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header(); 
$wp_query->set('orderby', 'menu_order');  
$wp_query->set('order', 'ASC');  
$wp_query->get_posts();   
if ( have_posts() ) : ?>
			<div id="content" class="piece category">
			<div class="page-header">
				<h2 class="page-title main">
					<?php printf( __( 'Category Archives: %s', 'twentyeleven' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				</h2>

				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
				?>
			</div>
			<div id="works" class="masonry-container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post();
					$default = array('class'	=> "worksimg",);
					if ( has_post_thumbnail() ) {  // check if the post has a Post Thumbnail assigned to it. 
						?>
						<a class="piece_div" href="<?php echo get_permalink(get_the_ID());?>">
							<h2 class="piece_title_home">
								<?php the_title();?>
							</h2>
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
				endwhile; ?>
			<?php else : ?>
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<p><?php echo"Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post."; ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			<?php endif; ?>
			</div><!-- #content -->
		</section><!-- #primary -->
<?php get_footer(); ?>
