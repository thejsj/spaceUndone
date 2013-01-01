<?php error_reporting(E_ALL); ?>
<?php get_header(); ?>  
 
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		<div id="content" class="piece">					
	
	<h2 class="main"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>			
	
		<article class="blog">			
			<?php the_content(); ?>		
		</article>			
					
	<div style="clear:both;"></div>			
	<?php endwhile;?>		
	<?php endif; ?>
	
</div><!--Content-->
 
 
<?php get_footer(); ?>  