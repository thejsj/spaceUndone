<?php get_header(); ?>
	<?php get_sidebar(); ?>
	<div id="content">	
		<h2 class="entry-title">
			<?php the_title() ?>
		</h2>
		<?php the_content() ?>
	</div>
<?php get_footer(); ?>
