<?php
// Template Name: Homepage
get_header(); ?>


	<main id="main" role="main">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<section class="banner">
			<div class="banner-left">
				<article class="banner-caption">
					<div class="text-wrap">
						<strong class="title">Individuals</strong>
						<p>Create your own personalized package of benefits that includes a health plan, dental and vision, and more.</p>
					</div>
					<div class="btn-wrap">
						<a class="btn-suscribe popup" href="#subscribe">Subscribe Now</a>
						<a href="/tour" class="more">Learn More</a>
					</div>
				</article>
			</div>
			<div class="banner-right">
				<article class="banner-caption">
					<div class="text-wrap">
						<strong class="title">Employer Group</strong>
						<p>Give your employees the control they want! Let them customize their benefits package to suit their needs, without any of the hassle.</p>
					</div>
					<div class="btn-wrap">
						<a href="/tour" class="btn-more">Learn More</a>
					</div>
				</article>
			</div>
		</section>
		<div id="content">
			<section class="steps-block">
				<h1>Subscribe <span>to your health in 3 easy steps</span></h1>
				<article class="steps">
					<div class="image-holder">
						<img src="<?php bloginfo('template_url'); ?>/_/img/img01.png" alt="image description" width="591" height="343">
					</div>
					<div class="description">
						<span class="number">1</span>
						<div class="text-holder">
							<h2>Choose your subscription</h2>
							<p>Your custom tailored benefits are waiting. Choosing your subscription is intuitive, because it fits your life and your unique needs.</p>
						</div>
					</div>
				</article>
				<article class="steps">
					<div class="image-holder align-left">
						<img src="<?php bloginfo('template_url'); ?>/_/img/img02.png" alt="image description" width="468" height="371">
					</div>
					<div class="description align-middle">
						<div class="text-holder">
							<h2>Customize even further</h2>
							<p>Customize your subscription by providing details that helps us get your benefits faster and determine your final cost.</p>
						</div>
						<span class="number right">2</span>
					</div>
				</article>
				<article class="steps">
					<div class="image-holder">
						<img src="<?php bloginfo('template_url'); ?>/_/img/img03.png" alt="image description" width="450" height="356">
					</div>
					<div class="description">
						<span class="number">3</span>
						<div class="text-holder">
							<h2>Check out with confidence</h2>
							<p>Review your choices, then simply enter billing information to be on your way toward awesome benefits within minutes.</p>
						</div>
					</div>
				</article>
			</section>
			
			
			<section class="ready">
				<div class="holder">
					
					
					<div class="left-third">
						<div class="readytitle">Individuals</div>
						<div class="btn-holder">
							<a href="#subscribe" class="subscribenow popup">Subscribe Now</a>
						</div>
					</div>
					<div class="middle-third">
						<span class="callout">Are you ready to enjoy full control<br>over your insurance benefits?</span>
					</div>
					<div class="right-third">
						<div class="readytitle">Employer Groups</div>
						<div class="btn-holder">
							<a href="/tour" class="subscribenow">Learn More</a>
						</div>
					</div>
					
					
				</div><!--/holder-->
				<div class="clearfix"></div>
			</section>
			
			
			<section class="whycb bluebg">
				<div class="holder">
					<div class="left-half">
					
						<h4>Why Connected Benefits?</h4>
						
						<p class="bigtext">We believe that getting employee benefits should be simpler.</p>
	
						<p>That's why we've partnered with Maxwell Health, an operating system for employee benefits, to bring you intuitive benefit packages that fit your unique lifestyle. Connected Benefits packages include health plans, dental and vision coverage, and a world-class personal health advocate service to help you navigate the complex world of healthcare. </p>
						
						<p>The Maxwell Health mobile app will make using your benefits easier than ever. With one tap, you can find an awesome doctor near you or ask your health advocate about a confusing bill. We also provide new benefits such as telemedicine, healthy food delivery, and identity theft protection.</p>
						
						<div class="logo">
							<a href="/">
								<img src="<?php bloginfo('template_url');?>/_/img/logo.png" alt="Connected Benefits" width="283" height="38">
							</a>
					</div>
						
					</div><!--/left-half-->
					
					<div class="right-half">
						
						<h4>Mobile App</h4>
						
						<p class="bigtext">Keep Connected. Stay In Sync.</p>
						
						<?php layerslider(1) ?>
						
					</div><!--/right-half-->
					
					<div class="clearfix"></div>
				
				</div>
			</section>
			
			
			
			
			
			<section class="include-block">
				<h2>What’s Included?</h2>
				<div class="include-list">
					<ul>
						<li>Health Plan</li>
						<li>Dental Plan</li>
						<li>Vision Coverage</li>
						<li>Disability</li>
						<li>Life Insurance</li>
					</ul>
					<ul>
						<li>Health Advocate Service</li>
						<li>Mobile App</li>
						<li>Curated health content from Greatist</li>
						<li>Medicare Supplements</li>
						<li>and more!</li>
					</ul>
				</div>
				<div class="query-block">
					<div class="btn-holder">
						<a href="#scheduledemo" class="popup">Schedule Demo</a>
					</div>
					<div class="questions">
						<strong class="title">Questions?</strong>
						<p>Call <a href="tel:180085314888" class="tel-link">1-800-853-14888</a> or <a class="email" href="/contact-us">email us</a></p>
					</div>
				</div>
			</section>
		</div>
		
		<?php endwhile; endif; ?>
		
	</main>

<?php get_footer(); ?>
