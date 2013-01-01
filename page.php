<?php error_reporting(E_ALL); ?>
<?php get_header(); ?>  
<?php //get_sidebar(); ?>  
<div id="content">	
	<div id="sidebar">	
		<h2 class="main">
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h2>
	</div>
	<div id="post_picture">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
	<p align="center">
		<?php posts_nav_link(); ?>
	</p>
</div>
 
 
<?php get_footer(); ?>  