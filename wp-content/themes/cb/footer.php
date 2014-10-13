			<footer id="footer">
				<div class="footer-holder">
					<div class="logo">
						<a href="/"><img src="<?php bloginfo('template_url'); ?>/_/img/logo.png" alt="connected benefits" width="283" height="38"></a>
					</div>
					<div class="footer-right">
						<div class="footer-top">
							<ul class="footer-nav">
								<li><a href="/frequently-asked-questions">FAQs</a></li>
								<li><a href="/privacy-policy">Privacy Policy</a></li>
								<li><a href="/contact-us">Contact Us</a></li>
							</ul>
							<ul class="social-networks">	
								<li><a class="twitter" href="https://twitter.com/cnnctedbenefits" target="_blank">twitter</a></li>
								<li><a class="facebook" href="http://connectedbenefits.tumblr.com/" target="_blank">tumblr</a></li>
							</ul>
						</div>
						<div class="by">
							<span>powered by</span>
							<a href="http://www.maxwellhealth.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_/img/logo-maxwell.png" alt="maxwell | Health" width="156" height="17"></a>
						</div>
					</div>
			<div class="clearfix"></div>
			<div class="designlove">website designed by <a href="http://brianjosephstudios.com" target="_blank" <?php if (!is_front_page()) { echo 'rel=nofollow' ;} ?>>Brian Joseph Studios.</a></div>

				</div>
			</footer>
		</div>

		<!-- INLINE MODAL WINDOWS -->
		
		
		<!-- Employer Group Quote -->
			<div id="getquote" class="white-popup mfp-hide clearfix">
				<div class="quoteformleft">
					<h4>Employer Group Quote</h4>
					
					<div class="bluebg">
						<ul>
							<li>Health Plan</li>
							<li>Dental Plan</li>
							<li>Vision Coverage</li>
							<li>Disability</li>
							<li>Life Insurance</li>
							<li>Health Advocate Service</li>
							<li>Mobile App</li>
							<li>Curated health content from Greatist</li>
							<li>Medicare Supplements</li>
							<li>and more!</li>
						</ul>
					</div>
					
				</div>
				<div class="quoteformright">
					<?php gravity_form(1, false, false, false, '', true, 12); ?>
				</div>
			</div><!--/getquote-->
			
		<!-- / END Employer Group Quote -->
			
		<!-- Individual Subscribe -->	
			
		<div id="subscribe" class="white-popup2 mfp-hide clearfix">
			<h4>Subscribe</h4>
			<p>Connected Benefits lets you personalize a package of benefits that includes a health plan, dental and vision, and more. Get a quote in seconds.</p>
			
			<?php gravity_form(2, false, false, false, '', true, 12); ?>
			
			
		</div>
		<!-- /END Individual Subscribe -->
		
		<!-- Schedule Demo -->	
			
		<div id="scheduledemo" class="white-popup mfp-hide clearfix">
			<h4>Attend our next live demo webinar - free!</h4>
			
			<div class="quoteformleft">
				<p>Request a date a time.</p>
	
				<p>We will take you through the Maxwell Health system from a technical standpoint and highlight the features that will take your business, and your employees benefits administration, to the next level. Includes a primer on our private exchange solution, reinvented shopping experience, and awesome post-enrollment experience.</p>
					
				<p><strong>Details:</strong><br>
				30 minute webinar with time for Q+A<br>
				Covers HR administrator and employee interfaces</p>
			</div>
			<div class="quoteformright">
			
			<?php gravity_form(4, false, false, false, '', true, 12); ?>
			
			</div>
			
		</div>
		<!-- /END Schedule Demo -->
		
		<!-- /END INLINE MODAL WINDOWS -->

	<?php wp_footer(); ?>

	</body>
</html>