<?php get_header();?>

<?php $hero = get_field('hero');?>

<main class = "container-fluid">
	<section id = "main-banner" class="jumbotron jumbotron-fluid vertical-center pt-4 px-2">
			<div class="mx-auto" id = "banner_text">
					<div class="col-12 my-auto">
						<h4 class="mb-4 text-center"><?php echo $hero['small_title'];?></h4>
						<h1 class="text-center"><?php echo $hero['main_title'];?></h1>
						<p class="lead text-center"> <?php echo $hero['subtitle_1'];?></p>
						<p class="lead text-center"><?php echo $hero['subtitle_2'];?></p>
					</div>
					<?php if($hero['link']):?>
					<div class="col-12 text-center my-auto" >
						<a href="<?php echo $hero['link'];?>" class="button text-center" id = "hero-button"><?php echo $hero['link_text'];?></a>
					</div>
					<?php endif;?>
			</div>
	</section>

<?php $sub_hero = get_field('sub_hero_text');?>

	<section class = "container-fluid" id = "services-blurb">
		<div class="container">
			<a name="services"></a>
			<div>
				<p class=" lead text-center">
					<?php echo $sub_hero;?>
				</p>
			</div>
		</div>
	</section>

<?php $we_offer = get_field('we_offer');?>

	<section id = "we-offer" class = "my-4">
		<div class="container">
			<div class="row">
				<div id = "offer-text" class=" col-12 my-4">
					<h5 class="text-center"><?php echo $we_offer['small_title'];?></h5>
					<h2 class="text-center heading-white"><?php echo $we_offer['main_title'];?></h2>
					<p class="lead text-center black mb-4"><?php echo $we_offer['content'];?></p>
				</div>
				<div class = "cardi col-12 col-md-3 mt-4">
					<img class="darkened-image" src="<?php bloginfo('template_directory');?>/assets/img/card-1.png">
						<h2><?php echo $we_offer['card_1'];?></h2>
						<a href="services/#training" ><img class="arrow-button" src="<?php bloginfo('template_directory');?>/assets/img/arrow-button.png"></a>
				</div>
				<div class = "cardi col-12 col-md-3  mt-4">
					<img class="darkened-image" src="<?php bloginfo('template_directory');?>/assets/img/coaching.png">
						<h2><?php echo $we_offer['card_2'];?></h2>
						<a href="services/#coach"><img class="arrow-button" src="<?php bloginfo('template_directory');?>/assets/img/arrow-button.png"></a>
				</div>
				<div class = "cardi col-12 col-md-3  mt-4">
					<img class="darkened-image" src="<?php bloginfo('template_directory');?>/assets/img/card-2.png">
						<h2><?php echo $we_offer['card_3'];?></h2>
						<a href="services/#consultant"><img class="arrow-button" src="<?php bloginfo('template_directory');?>/assets/img/arrow-button.png"></a>
				</div>
				<div class = "cardi col-12 col-md-3  mt-4">
					<img class="darkened-image" src="<?php bloginfo('template_directory');?>/assets/img/card-3.png">
						<h2><?php echo $we_offer['card_4'];?></h2>
						<a href="services/#psychometrics"><img class="arrow-button" src="<?php bloginfo('template_directory');?>/assets/img/arrow-button.png"></a>
				</div>
			</div>
			<?php if($we_offer['link']):?>
				<div id = "services-button" class = "row">
					<a class="button mx-auto" href="<?php echo $we_offer['link'];?>" target="_blank"><?php echo $we_offer['link_text'];?></a>
				</div>
			<?php endif;?>
		</div>
	</section>
<?php $get_in_touch = get_field('get_in_touch');?>
	<section id = "get-in-touch" class="mt-3 container-fluid">
		<div class="container">
			<a name="about"></a>
			<div class="row">
				<div class="col-12 col-md-7 my-auto">
					<h3 class=""><?php echo $get_in_touch['heading'];?></h3>
						<p class=""><?php echo $get_in_touch['content'];?></p>
				</div>
				<?php if($get_in_touch['link']):?>
					<div class="col-12 col-md-3 offset-md-2 my-auto">
						<a href="<?php echo $get_in_touch['link'];?>" class="button"><?php echo $get_in_touch['link_text'];?></a>
					</div>
				<?php endif;?>
			</div>
		</div>
	</section>
	<?php $meet_md = get_field('meet_the_md');?>
	<section id = "meet-director"  class=" container-fluid">
		<div class=" container">
			<div class="card" id="director-card">
				<div class="row no gutters">
					<div class="col-auto offset-sm-2a offset-md-0 col-md-auto">
				  		<img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/carolann.png" alt="Image of Director">
				  	</div>
				  	<div class="col col-sm-12 col-md">
				  		<div class="card-block px-2">
				  			<div id="meet-director-title" class="py-2 px-3 my-4" style="max-width: 450px;">
						    	<h3 class="card-title text-center"><?php echo $meet_md['header'];?></h3>
						    	<h5 class="text-center"><?php echo $meet_md['sub_heading'];?></h5>
							</div>
						    <p class="card-text mt-4"><?php echo $meet_md['content'];?></p>
						    <?php if($meet_md['instagram'] || $meet_md['linkedin'] ||$meet_md['twitter']):?> 
						    	<h4 id="social-links-director" class="">Social Media Links:</h4>
						    <?php endif;?>
						    <?php if($meet_md['linkedin']):?>
						    	<a class ="mt-3" href="<?php echo $meet_md['linkedin'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/linked-in.svg"></a>
						    <?php endif;?>
						    <?php if($meet_md['instagram']):?>
						    	<a class ="mt-3" href="<?php echo $meet_md['instagram'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/instagram.svg"></a>
						    <?php endif;?>
						    <?php if($meet_md['twitter']):?>
						   		<a class ="mt-3" href="<?php echo $meet_md['twitter'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/twitter.svg"></a>
						    <?php endif;?>
						</div>
					</div>
			  	</div>
			</div>
		</div>
	</section>
<?php $testimonials = get_field('testimonials');?>
	<section class="container py-4 my-2">
		<div class="card" id = "quotes" >
			<img class="d-inline-block quote-img w-20 py-3" src="<?php bloginfo('template_directory');?>/assets/img/left-quote.svg" alt="First slide">
			<h4 class="card-header quote-header text-center d-inline-block mt-4">What People Say</h4>
			<div class="card-body">
				<div id="quoteCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					    <li data-target="#quoteCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#quoteCarousel" data-slide-to="1"></li>
					    <li data-target="#quoteCarousel" data-slide-to="2"></li>
					    <li data-target="#quoteCarousel" data-slide-to="3"></li>
					    <li data-target="#quoteCarousel" data-slide-to="4"></li>
					    <li data-target="#quoteCarousel" data-slide-to="5"></li>
					    <li data-target="#quoteCarousel" data-slide-to="6"></li>
					</ol>
				  	<div class="carousel-inner">
				    <div class="carousel-item active">
					    <p class="text-center"><?php echo $testimonials['slide_1_p1'];?></p>
					    <p><?php echo $testimonials['slide_1_p2'];?></p>
					    <?php if($testimonials['slide_1_name']):?>
					    	<h5 class="my-3 text-center"><?php echo $testimonials['slide_1_name'];?></h5>
					    <?php endif;?>
					    <p class="text-center"><?php echo $testimonials['slide_1_position'];?></p>
				    </div>
				    <div class="carousel-item">
						<p class="text-center"><?php echo $testimonials['slide_2_content'];?></p>
						<?php if($testimonials['slide_2_name']):?>
							<h5 class="text-center"><?php echo $testimonials['slide_2_name'];?></h5>
						<?php endif;?>
						<p class="text-center"><?php echo $testimonials['slide_2_position'];?></p>
				    </div>
				    <div class="carousel-item">
						<p class="text-center"><?php echo $testimonials['slide_3_content'];?></p>
						<?php if($testimonials['slide_3_name']):?>
							<h5 class="text-center"><?php echo $testimonials['slide_3_name'];?></h5>
						<?php endif;?>
						<p class="text-center"><?php echo $testimonials['slide_3_position'];?></p>
				    </div>
				    <div class="carousel-item">
						<p class="text-center"><?php echo $testimonials['slide_4_content'];?></p>
						<?php if($testimonials['slide_4_name']):?>
							<h5 class="text-center"><?php echo $testimonials['slide_4_name'];?></h5>
						<?php endif;?>
						<p class="text-center"><?php echo $testimonials['slide_4_position'];?></p>
				    </div>
				    <div class="carousel-item">
						<p class="text-center"><?php echo $testimonials['slide_5_content'];?></p>
						<?php if($testimonials['slide_5_name']):?>
							<h5 class="text-center"><?php echo $testimonials['slide_5_name'];?></h5>
						<?php endif;?>
						<p class="text-center"><?php echo $testimonials['slide_5_position'];?></p>
				    </div>
				    <div class="carousel-item">
						<p class="text-center"><?php echo $testimonials['slide_6_content'];?></p>
						<?php if($testimonials['slide_1_name']):?>
							<h5 class="text-center"><?php echo $testimonials['slide_6_name'];?></h5>
						<?php endif;?>
						<p class="text-center"><?php echo $testimonials['slide_6_position'];?></p>
				    </div>
				    <div class="carousel-item">
						<p class="text-center"><?php echo $testimonials['slide_7_content'];?></p>
						<?php if($testimonials['slide_1_name']):?>
							<h5 class="text-center"><?php echo $testimonials['slide_7_name'];?></h5>
						<?php endif;?>
						<p class="text-center"><?php echo $testimonials['slide_7_position'];?></p>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#quoteCarousel" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#quoteCarousel" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();?>