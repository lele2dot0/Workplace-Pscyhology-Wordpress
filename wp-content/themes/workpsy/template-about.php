<?php
/* Template Name: About */

get_header();
?>

<?php $page_header = get_field('page_header');?>
	<main class = "container-fluid">
		<section id = "about-banner" class="secondary-banner jumbotron jumbotron-fluid pt-4 px-2">
				<div class="mx-auto" id = "banner_text">
						<div class="col-12 my-auto">
							<h1 class="display-4 text-center"><?php echo $page_header['main_heading'];?></h1>
							<p class="lead text-center"> <?php echo $page_header['line_1'];?> <br> <?php echo $page_header['line_2'];?></p>
						</div>
				</div>
		</section>
<?php $about = get_field('about_blurb');?>

		<section class = "container-fluid" id = "about-blurb">
			<div id="about-inner" class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<img src="<?php echo $about['image'];?>">
					</div>
					<div class="col-12 col-md-8">
						<!--<h5>About Workplace Psychology</h5>-->
						<h2><?php echo $about['main_heading'];?></h2>
						<p class="card-text mt-4">
							<?php echo $about['content'];?>
						</p>
					</div>
				</div>
			</div>
		</section>
<?php $offer = get_field('we_offer');?>
		<section id = "we-offer" class = "my-4">
			<div class="container-xl">
				<div class="row">
					<div id = "offer-text" class=" col-12 my-4">
						<h5 class="text-center"><?php echo $offer['small_header'];?></h5>
						<h2 class="text-center heading-white"><?php echo $offer['main_header'];?></h2>
						<p class="lead text-center black mb-4"><?php echo $offer['content'];?></p>
					</div>
					<div id="card-block" class="row card-wrapper">
						<div class="col-12 col-md-4 my-4">
							<div class = "cardi-2">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="darkened-image" src="<?php bloginfo('template_directory');?>/assets/img/our-vision.png">
											<h2 class="about">Our Vision</h2>
									</div>
									<div class="flip-card-back">
									    <p><?php echo $offer['flip_card_1'];?></p>
								    </div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4  my-4">
							<div class = "cardi-2">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="darkened-image" src="<?php bloginfo('template_directory');?>/assets/img/our-mission.png">
											<h2 class="about">Our Mission</h2>
									</div>
									<div class="flip-card-back">
									    <p><?php echo $offer['flip_card_2'];?></p>
								    </div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4  my-4">
							<div class = "cardi-2">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img class="darkened-image" src="<?php bloginfo('template_directory');?>/assets/img/our-goal.png">
											<h2 class= "goal">Our Goal</h2>
									</div>
									<div class="flip-card-back">
									    <p><?php echo $offer['flip_card_3'];?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php $carolann = get_field('carolann');?>
		<section id = "meet-director"  class="py-md-3 container-fluid">
			<div class=" container-xl">
				<div class="card card-padding director-card" id="md-profile">
					<div class="row no gutters">
						<div class="col-auto offset-sm-1 col-md-auto">
					  		<img class="img-fluid" src="<?php echo $carolann['profile_picture']['url'];?>" alt="Image of Director">
					  		<div id="meet-personnel-title" class="meet-personnel-title py-2 px-3 my-4";>
							    <h3 class="card-title text-center"><?php echo $carolann['name'];?></h3>
							    <p class="text-center"><?php echo $carolann['title'];?></p>
							</div>
						<!--<?php if($carolann['instagram'] || $carolann['linkedin'] ||$carolann['twitter']):?> 
								<h4 id="social-links-director-2" class="text-center">Social Media Links:</h4>
							<?php endif;?>
							<div class="text-center">
								<?php if($carolann['linkedin']):?>
						    	<a class ="mt-3" href="<?php echo $meet_md['linkedin'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/linked-in.svg"></a>
						    <?php endif;?>
						    <?php if($carolann['instagram']):?>
						    	<a class ="mt-3" href="<?php echo $meet_md['instagram'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/instagram.svg"></a>
						    <?php endif;?>
						    <?php if($carolann['twitter']):?>
						   		<a class ="mt-3" href="<?php echo $meet_md['twitter'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/twitter.svg"></a>
						    <?php endif;?>
							</div>-->
					  	</div>
					  	<div class="col col-sm-12 col-md">
					  		<div class="card-block px-2">
					  			<h3 class="green"><?php echo $carolann['heading'];?></h3>
							    <p class="card-text mt-4">
							    	<?php echo $carolann['p1'];?>
							    </p>
							    <p class="card-text mt-4">
							    	<?php echo $carolann['p2'];?>  
							    </p>
							    <a data-toggle="collapse" href="#carolann-contd" role="button" aria-expanded="false" aria-controls="carolann-contd" class="float-right carolann expand-link" onclick="moreToggle()">See More</a>
							</div>
						</div>
						<div class="collapse" id="carolann-contd">
							<div class="card-block px-2">
						    	<p class="card-text mt-4">
						    		<?php echo $carolann['p3'];?>
						    	<p class="card-text mt-4">
						    		<?php echo $carolann['p4'];?> 
						    	</p>
						    	<p class="card-text mt-4">
						    		<?php echo $carolann['p5'];?>
						    	</p>
						    	<p class="card-text mt-4">
						    		<?php echo $carolann['p6'];?>  
						    	</p>
						    	<a data-toggle="collapse" href="#carolann-contd" role="button" aria-expanded="false" aria-controls="carolann-contd" class="float-right expand-link close-ann" onclick="moreToggle()">Close</a>
					    	</div>
						</div>
				  	</div>
				</div>
<?php $coach = get_field('head_coach');?>
				<div class="card card-padding director-card" id="coaching-profile">
					<div class="row no gutters">
						<div class="col-auto offset-sm-1 col-md-auto">
					  		<img class="img-fluid" src="<?php echo $coach['profile_photo']['url'];?>" alt="Image of Director">
					  		<div id="meet-personnel-title" class="meet-personnel-title py-2 px-3 my-4">
							    <h3 class="card-title text-center"><?php echo $coach['name'];?></h3>
							    <p class="text-center"><?php echo $coach['title'];?></p>
							</div>
							<?php if($coach['instagram'] || $coach['linkedin'] ||$coach['twitter']):?> 
							<h4 id="social-links-director-2" class="text-center">Social Media Links:</h4>
							<?php endif;?>
							<div class="text-center">
								<?php if($coach['linkedin']):?>
								<a class ="mt-3" href="<?php echo $coach['linkedin'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/linked-in.svg"></a>
								<?php endif;?>
								<?php if($coach['instagram']):?>
								<a class ="mt-3" href="<?php echo $coach['instagram'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/instagram.svg"></a>
								<?php endif;?>
								<?php if($coach['twitter']):?>
								<a class ="mt-3" href="<?php echo $coach['twitter'];?>"><img src="<?php bloginfo('template_directory');?>/assets/img/twitter.svg"></a>
								<?php endif;?>
							</div>
					  	</div>
					  	<div class="col col-sm-12 col-md">
					  		<div class="card-block px-2">
					  			<h3 class="green"><?php echo $coach['heading'];?></h3>
							    <p class="card-text mt-4"><?php echo $coach['p1'];?></p>
							    <p class="card-text mt-4">
							    	<?php echo $coach['p2'];?>
							    </p>
							    <p class="card-text mt-4">
							    	<?php echo $coach['p3'];?> 
							    </p>
							     <a data-toggle="collapse" href="#naomi-contd" role="button" aria-expanded="false" aria-controls="naomi-contd" class=" float-right naomi expand-link" onclick="naomiToggle()">See More</a>
							</div>
							</div>
						</div>
						<div class="collapse" id="naomi-contd">
							<div class="card-block px-2">
						    	<p class="card-text mt-4">
						    		 
						    	</p>
						    	<ul class="card-text">
						    		<?php echo $coach['p4'];?>
						    	</ul>
						    	<p class="card-text mt-4">
						    		<?php echo $coach['p5'];?>
						    	</p>
						    	<p class="card-text mt-4">
						    		<?php echo $coach['p6'];?>
						    	</p>
						    	<h2><?php echo $coach['second_heading'];?></h2>
						    	<ul class="card-text ">
						    		<?php echo $coach['content'];?>
						    	</ul>
						    	<a data-toggle="collapse" href="#naomi-contd" role="button" aria-expanded="false" aria-controls="naomi-contd" class="float-right expand-link naomi" onclick="naomiToggle()">Close</a>
						    </div>
						</div>
				  	</div>
				</div>
			</div>
		</section>
	</main>





<?php get_footer();?>