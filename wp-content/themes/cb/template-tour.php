<?php
// Template Name: Tour
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		
		<main id="main" role="main">
			<div id="content">
				<section class="whitebg">
					
					<h1><?php the_field('main_title');?></h1>
					<div class="toursubtitle"><?php the_field('subtitle');?></div>
					
						<article>
					
						<?php the_content();?>	
						
						</article>

				</section><!-- /container-->
				
					
						<div id="horizontalTab">
							<div class="whitebg">
								  <ul class="resp-tabs-list">
								    <li>Manage all your employees</li>
								    <li>Custom communication tools</li>
								    <li>Manage reports</li>
								    <li>Shop by bundle / plan</li>
								    <li>Check out with confidence</li>
								   
								  </ul>
							</div>	  
							  <section class="bluebg tourtabs">
								  	<div class="bluebgcontent resp-tabs-container">
										  <div id="tabs-1">
										    <img src="<?php bloginfo('template_url');?>/_/img/tab1.jpg" />
										  </div>
										  <div id="tabs-2">
										    <img src="<?php bloginfo('template_url');?>/_/img/tab2.jpg" />
										  </div>
										  <div id="tabs-3">
										  <img src="<?php bloginfo('template_url');?>/_/img/tab3.jpg" />
										  </div>
										  <div id="tabs-4">
										  <img src="<?php bloginfo('template_url');?>/_/img/tab4.jpg" />
										  </div>
										  <div id="tabs-5">
											  <img src="<?php bloginfo('template_url');?>/_/img/tab5.jpg" />
										  </div>
								</div><!--/bluebgcontent-->
							</section>
						</div>
				
				
				<section class="whitebg clearfix">
					
					<div class="left-half">
						
						<?php layerslider(2) ?>
						
					</div><!--/left-half-->
					
					<div class="right-half">
						
						<h4>Powerful Mobile App</h4>
						
						<p class="bigtext">Keep Connected. Stay In Sync.</p>
						
						<p class="mediumtext">View benefits, rewards,wellness information and get answers from a personal concierge.</p>
						<a href="#" target="_blank"><img src="/wp-content/uploads/2014/10/gplay.png" alt="Google Play Store"/></a> <a href="#" target="_blank"><img src="/wp-content/uploads/2014/10/appstore.png" alt="Apple Store"/></a>
					</div><!--/right-half-->
					
				</section>
				
				<section class="whitebg">
					
					<div class="breaker"></div>
					
					<div class="logoslider">
					
						<h2 class="bluecenter">Featured Carriers</h2>
						
						<?php $loop = new WP_Query( array( 'post_type' => 'carriers', 'orderby' => 'post_date', 'posts_per_page' => -1) ); ?>
						
						<ul class="bxslider">
						
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
							
								<li><img src="<?php the_field('logo');?>" alt="<?php the_title();?>" /></li>
		
							
						<? endwhile; wp_reset_query(); ?> 
						
						</ul>
					</div><!--/logo-slider-->
					
					<div class="logoslider">
					
						<h2 class="bluecenter">Featured Products</h2>
						
						<?php $loop = new WP_Query( array( 'post_type' => 'products', 'orderby' => 'post_date', 'posts_per_page' => -1) ); ?>
						
						<ul class="bxslider">
						
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
							
								<li><img src="<?php the_field('logo');?>" alt="<?php the_title();?>" /></li>
		
							
						<? endwhile; wp_reset_query(); ?> 
						
						</ul>
					</div><!--/logo-slider-->
					
					
					
				</section>
				
				
				
			</div><!--/content-->
		</main>
		
		<?php endwhile; endif; ?>


<?php get_footer(); ?>
