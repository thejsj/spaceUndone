<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<!--Main CSS-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<!--ShadowBox-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/shadowbox/shadowbox.css" type="text/css" media="screen,projection" />
	<!--FavIcon-->	
	<link rel='icon' href='<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png' type='image/png' />
	<!--WPHEAD-->
	<?php wp_head(); ?>
</head>
<body>
	<header>				
		<nav>
			<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" >
				<h1>
					<?php echo get_bloginfo("name")?>
				</h1>
			</a>		
			<?php wp_nav_menu( array('menu' => 'primary' )); ?>	
		</nav>	
	</header>
