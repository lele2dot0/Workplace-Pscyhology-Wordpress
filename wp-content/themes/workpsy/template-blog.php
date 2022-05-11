<?php
/* Template Name: Blog */

get_header();
?>

<?php get_header();?>

<section class="container mt-4">

	<h1><?php echo single_cat_title();?></h1>
	<?php
			    // TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        <div class="entry-content-page">
			            <?php the_content(); ?> <!-- Page Content -->
			        </div><!-- .entry-content-page -->
			        <div class="row mb-4">
			        	<div class="text-center mx-auto my-4">
			        		<a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
			        	</div>
			    	</div>

		    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
		    ?>
</section>

<?php get_footer();?>