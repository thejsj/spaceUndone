	</div><!-- END content -->				
	<div id="footer">
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/masonry.js"></script>
	<script>
	$('.attachment-thumbnail').addClass("shadowbox");
	$('.attachment-thumbnail').parent().attr('rel', 'shadowbox[Vacation]');
	var $container = $('.masonry-container');
	$container.imagesLoaded(function(){
		  $container.masonry({
		    itemSelector : '.piece_div',
		    columnWidth : 260
		  });
		});
	</script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/shadowbox/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init({
			    handleOversize: "resize",
			    modal: true,
			    overlayColor: "#fff", 
				overlayOpacity: "0.5",
				animateFade: false,
		});
	</script>
	<?php wp_footer(); ?> 
</body>

</html>