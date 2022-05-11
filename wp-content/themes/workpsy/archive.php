<?php get_header();?>

<section class="container mt-4">

	<h1><?php echo single_cat_title();?></h1>

	<?php get_template_part('includes/section','archive');?>
</section>

<?php get_footer();?>