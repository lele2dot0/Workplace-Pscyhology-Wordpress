<?php get_header();?>

<?php $post_image = get_field('post_feature_image');?>
<div class="jumbotron-fluid vertical-center-2 mb-4 pb-4" style="background: linear-gradient(rgb(0,0,0, 0.75), rgb(0,0,0, 0.75)), url(<?php echo $post_image['url'];?>) center/cover;color: #FFFFFF; margin-bottom: 0;">
	<div class="container my-4 py-4">
		<img src="<?php echo $post_image['url'];?>">
		<h1 class="display-4"><?php the_title(); ?></h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 col-md-10 offset-md-1">
		    <h1><?php the_title(); ?></h1>

		    <?php get_template_part('includes/section','blogcontent');?>

		</div>
	</div>
</div>


<?php get_footer();?>