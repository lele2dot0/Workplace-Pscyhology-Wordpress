<?php 
/* Template Name: Contact Us */


get_header();?>

<main class = "container-fluid grey">
	<section id="contact-header" class="container">
		<h1 class="text-center">Contact Us</h1>
	</section>
	<section id="contact-us" class="container">
		<div class="contact-us" id="contact-form">
			<h3>Get in touch with us</h3>
			<p>Your email address will not be published</p>
			<?php
			    // TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        <div class="entry-content-page">
			            <?php the_content(); ?> <!-- Page Content -->
			        </div><!-- .entry-content-page -->

		    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
		    ?>
		</div>
	</section>
	<section  class="container" id="contact-details">
		<div class="row">
				<div id="email-contact" class="col-12 col-md-6 my-4">
					<div class="d-inline-block">
						<img src="<?php bloginfo('template_directory');?>/assets/img/email.png">
					</div>
					<div class="d-inline-block">
						<h5>Mail Us:</h5>
						<a href="mailto:carolannedwards@workplace-psychology.com"><p>carolannedwards@workplace-psychology.com</p></a>
					</div>
				</div>
				<div id="phone-contact" class="col-12 col-md-4 my-4">
					<div class="d-inline-block">
						<img src="<?php bloginfo('template_directory');?>/assets/img/phone.png">
					</div>
					<div class="d-inline-block">
						<h5>Phone Us:</h5>
						<a href="tel:+44(0)7946181079">+44(0)7946181079</a>
					</div>
				</div>
			</div>
	</section>
</main>

<?php get_footer();?>