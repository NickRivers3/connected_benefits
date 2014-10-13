<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		
		<main id="main" role="main">
			<div id="content">
				<section class="whitebg">
				
					<?php if(is_page(104) ) { ?>

						<h1><?php the_title();?></h1>
					
					<? } elseif (is_page(37)) { ?>
						
						<h1><?php the_field('main_title');?></h1>
						<div class="toursubtitle"><?php the_field('subtitle');?></div>
					<? } else {?>
						<h1><?php the_field('main_title');?></h1>
						<h2><?php the_field('subtitle');?></h2>
					
					<? } ?>
					
					<div class="textcenter">
					
						<?php the_content();?>	
									
					</div>
					
				</section><!-- /container-->
				
				<?php if(is_page(12) ) { ?>
				
				<section class="bluebg">
					<div class="blueabout">
						<?php the_field('about_cb_box');?>
					</div>
				</section>
				
				<section class="team fullwidthwhitebg">
				
					<h2 class="bluecenter">The Starting Lineup</h2>
					
					<ul class="ch-grid">
						
						<?php $loop = new WP_Query( array( 'post_type' => 'team', 'orderby' => 'post_date', 'order' => 'ASC', 'posts_per_page' => -1) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<li>
							<div class="ch-item ch-img-1" style="background-image:url('<?php the_field('image');?>'); background-position: center center;">
								<div class="ch-info">
									<h3><?php the_title();?></h3>
									<p><?php the_field('title'); ?></p>
									<p><?php the_field('bio_line'); ?></p>
								</div>
							</div>
						</li>
						
						<? endwhile; ?> 
						
					</ul>
				
				</section>
				
				
				
				<? } ?>
				
			</div><!--/content-->
		</main>
		
		
		
		
		<?php endwhile; endif; ?>


<?php get_footer(); ?>
