<?php
// Template Name: Popup
 ?>
<!DOCTYPE html>
<head id="www-connectedbenefits-com" data-template-set="connected-benefits-wordpress-theme" profile="http://gmpg.org/xfn/11">

<title>Popup</title>
<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		
		<main id="main" role="main">
			<div id="content">
				<section class="popupcontainer">
					<?php the_content();?>
				</section>
			</div><!--/content-->
		</main>
		
		<?php endwhile; endif; ?>

	</div>
<?php wp_footer(); ?>

	</body>
</html>
