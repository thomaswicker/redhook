<?php

/*
   Template Name: Contact Template
*/

?>

<?php get_header('contact'); ?>

	<header class="headerContact">
		<div class="headerTextContainer">
			<h1>Contact Our Team</h1>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
			<div class="searchBar"><?php get_search_form(); ?></div>
		</div><!--/.headerTextContainer -->
	</header><!--/.headerHome -->

	<section class="bodyMain">

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>
                <hr>

                <?php endwhile; else: ?>
    
                <p>There are no posts or pages here</p>

                <?php endif; ?>

		<section class="bodyMain_left">

			<div class="bodyMain_left_top bodyMainContact">

				<h1>Corporate Office</h1>

				<div class="contactBodyContainer">

					<div class="contactBodyMap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3342.643667642656!2d-97.132257!3d33.09215799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864dcd06ee0bfffb%3A0x94cf8ba068fc6c81!2s2650+Farm+to+Market+407%2C+Northlake%2C+TX+76247!5e0!3m2!1sen!2sus!4v1406214848022" width="100%" height="auto"></iframe>
					</div><!--/.contactBodyMap -->

					<div class="contactBodyAddress">
						<h3>Dallas, TX</h3>
						<p><i class="fa fa-phone-square"></i> 972-332-1910</p>
						<p><i class="fa fa-fax"></i> 888-878-5664</p>
						<p>2650 FM 407 E. - STE 145-150</p>
						<p>Bartonville, TX 76226</p>
					</div><!--/.contactBodyAddress -->

				</div><!--/.contactBodyContainer -->

				<h1>Regional Offices</h1>

				<div class="contactBodyContainer">

					<div class="contactBodyMap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3442.3760460948147!2d-97.981109!3d30.368678000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865b398ccb49437b%3A0xbbfe02c0ac1ea11b!2s805+Electra%2C+Austin%2C+TX+78734!5e0!3m2!1sen!2sus!4v1406215182086" width="100%" height="auto"></iframe>
					</div><!--/.contactBodyMap -->

					<div class="contactBodyAddress">
						<h3>Austin, TX</h3>
						<p><i class="fa fa-phone-square"></i> 512-609-1910</p>
						<p><i class="fa fa-skype"></i> 214-878-5664</p>
						<p>805 Electra</p>
						<p>Austin, TX 78734</p>
					</div><!--/.contactBodyAddress -->

				</div><!--/.contactBodyContainer -->

				<div class="contactBodyContainer container2">

					<div class="contactBodyMap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3164.6271969341246!2d-122.304974!3d37.51671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9f73f66a05c1%3A0x577ed9391de61033!2s2509+Buena+Vista+Ave%2C+Belmont%2C+CA+94002!5e0!3m2!1sen!2sus!4v1406215295606" width="100%" height="auto"></iframe>
					</div><!--/.contactBodyMap -->

					<div class="contactBodyAddress">
						<h3>Bay Area, CA</h3>
						<p><i class="fa fa-phone-square"></i> 408-838-0637</p>
						<p>2509 Buena Vista Avenue</p>
						<p>Belmont, CA 94002</p>
					</div><!--/.contactBodyAddress -->

				</div><!--/.contactBodyContainer -->

			</div><!--/.bodyMain_left_top -->

		</section><!--/.bodyMain_left -->

		<aside class="bodyMain_right">
			<article>
				<h3>Browse Our Latest Jobs</h3>
				<div><?php get_sidebar(); ?></div>
			</article>
		</aside><!--/.bodyMain_right -->

	</section><!--/.bodyMain -->

<?php get_footer(); ?>
