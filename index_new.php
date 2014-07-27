<?php get_header(); ?>

  <div id="slideout" style="margin: 20px 0px 0px 0px;">
    <div class="searchBTN"></div>
    <div id="slideout_inner" style="margin: 20px 0px 0px 0px;">
      <?php get_search_form(); ?>
    </div>
  </div><!--END slideout-->

<div id="sideBarLeft" class="padLeft col-lg-2 col-md-3 col-sm-4 col-xs-9"><img src="http://www.thomaswicker.com/img/myphoto_withborder.png" class="img-responsive slideUp" id="myPhoto" alt=""/>
	<h2 class="sideBarLeftH2">Thomas J. Wicker</h2>
	<h3 class="tagline">UI/UX Front End Ninja</h3>
	<a href="http://www.thomaswicker.com/contact"><button class="btn btn-small btn-primary hireMeBTN">Available for Contract</button></a>
	<div id="phoneNumberBox"><p class="phoneNumber"><i class="fa fa-phone"></i>(720) 984.6998</p></div>
	<div id="myEmailBox"><a href="mailto:design@thomaswicker.com" class="myEmail"><i class="fa fa-envelope"></i>design@thomaswicker</a></div>             
	<p id="aboutMeText">UI/UX designer, front-end developer, HTML & CSS ninja, entrepreneur, fine artist, photographer, father. Extreme passion for new tech: #html5, #css3, #sass, #jquery, #javascript</p>        
	<?php do_action('wp_dribbble'); ?>     
</div>

<div id="postContainer" class="bodytxt col-lg-6 col-md-7 col-sm-6 col-xs-12">

	<?php query_posts('showposts=7'); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php else : ?>

	<h2>Not Found</h2>

<?php endif; ?>

</div><!--END .bodytxt -->		

<?php get_sidebar(); ?>

<aside class="socialMediaColumn col-lg-1 col-md-1 col-sm-1 col-xs-3">

	<div id="socialMediaFacebook" class="btnFade"><a href="http://www.facebook.com/thomasjwicker" target="_blank"></a></div>

	<div id="socialMediaTwitter" class="btnFade"><a href="https://twitter.com/thomasjwicker" target="_blank"></a></div>

	<div id="socialMediaInstagram" class="btnFade"><a href="http://www.instagram.com/thomasjwicker" target="_blank"></a></div> 
	
	<div id="socialMediaLinkedIn" class="btnFade"><a href="http://www.linkedin.com/in/thomaswicker" target="_blank"></a></div>
	
	<div id="socialMediaGithub" class="btnFade"><a href="http://www.github.com/thomaswicker" target="_blank"></a></div>

	<div id="socialMediaDribbble" class="btnFade"><a href="http://dribbble.com/thomasjwicker" target="_blank"></a></div>

	<div id="socialMediaCodepen" class="btnFade"><a href="http://www.codepen.io/thomasjwicker" target="_blank"></a></div>

</aside> 

</section>



<!-- BEGIN CONTACT MODAL BOX -->

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="http://www.thomaswicker.com/btns/closeBTN_contactForm_up.png" alt=""></button>
				<h4 class="modal-title contactMeHeader" id="myModalLabel">Contact Me</h4>
			</div>
			<div class="modal-body" id="form">

				<form name="contact" action="http://www.thomaswicker.com/processForm.php" method="post" role="form">

					<fieldset>

						<p class="contactBlurb">Hit me up with the form below and include as many details as you can about your project — it will help me get back to you sooner.</p>

						<div class="form-group"> 
							<label id="formLabel" for="name">Name:</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"  title="Please enter your name."/>
						</div>

						<div class="form-group">
							<label class="formLabel" for="phone"/>Phone:</label>
							<input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter your phone #" title="Please enter a valid phone number."/>
						</div>

						<div class="form-group">
							<label id="formLabel" for="email"/>Email:</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" title="Please enter a valid email address."/>
						</div>

						<div class="form-group">
							<label class="formLabel" for="comments" id="comments">Comments:</label>
							<textarea class="form-control" name="comments" id="comments"></textarea>
						</div>

						<fieldset class="contactButtonContainer">
							<button type="submit" name="submit" class="submit btn btn-primary" >Send</button>
							<button type="reset" name="reset"  class="submit btn btn-default" >Reset</button>
						</fieldset>

					</fieldset>

				</form>
			</div>
		</div>
	</div>
</div>

<!--- END CONTACT MODAL BOX -->

  <script>
    $(document).ready(function() {
      $(".entry img").before('<article class="tapeWrapper"><div class="tape"></div></article>');
      $(".gallery div").removeClass('tape');
    });
  </script>

<!-- BEGIN JS FOR LIGHTBOX -->   
<script>
	$(function()
	{
		$('[rel="lightbox"]').lightbox();
	});
</script>
<!-- END JS FOR LIGHTBOX -->   


<?php get_footer(); ?>