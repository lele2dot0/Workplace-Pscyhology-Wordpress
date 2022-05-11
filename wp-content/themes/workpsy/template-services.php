<?php
/* Template Name: Services */

get_header();?>

<?php $title = get_field('title');?>
	<main class = "container-fluid">
		<section id="services-banner" class=" secondary-banner jumbotron jumbotron-fluid pt-4 px-2" style="background:linear-gradient( rgb(0,0,0, 0.75), rgb(0,0,0, 0.75) ), url('<?php the_post_thumbnail_url('hero');?>') center/cover !important;"><div class="mx-auto"><h1 class="text-center display-4"><?php echo $title;?></h1></div>
		</section>
		<?php $train = get_field('training_courses');?>
		<a name="training"></a>
		<section id="training" class="l-background">
			<div class="container-xl">
				<div class="row">
					<div class="col-12 col-sm-5 ">
						<h3><?php echo $train['heading'];?></h3>
						<p><?php echo $train['content'];?></p>
						<ul class="green-check">
							<li><?php echo $train['line_1'];?></li>
							<li><?php echo $train['line_2'];?></li>
							<li><?php echo $train['line_3'];?></li>
							<li><?php echo $train['line_4'];?></li>
							<li><?php echo $train['line_5'];?></li>
						</ul>
					</div>
					<div class="col-12 col-sm-5 offset-sm-1">
						<img src="<?php echo $train['image'];?>">
					</div>
				</div>
			</div>
		</section>
		<section id="training-mobile" class="l-background">
			<div class="container-xl">
				<div class="row">
					<div class="col-12">
						<img src="<?php echo $train['image'];?>">
					</div>
					<div class="col-12 ">
						<h3><?php echo $train['heading'];?></h3>
						<p><?php echo $train['content'];?></p>
						<ul class="green-check">
							<li><?php echo $train['line_1'];?></li>
							<li><?php echo $train['line_2'];?></li>
							<li><?php echo $train['line_3'];?></li>
							<li><?php echo $train['line_4'];?></li>
							<li><?php echo $train['line_5'];?></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php $coach = get_field('coaching');?>
		<a name="coach"></a>
		<section id="coaching" class="d-background bg-graphic">
			<div class="container-xl">
				<div class="row">
					<div class="col-12 col-sm-5"><img src="<?php echo $coach['image'];?>"></div>
					<div class="col-12 col-sm-5 offset-sm-1">
						<h3><?php echo $coach['heading'];?></h3>
						<p><?php echo $coach['content'];?></p>
						<ul class="green-check">
							<li><?php echo $coach['line_1'];?></li>
							<li><?php echo $coach['line_2'];?></li>
							<li><?php echo $coach['line_3'];?></li>
							<li><?php echo $coach['line_4'];?></li>
							<li><?php echo $coach['line_5'];?></li>
							<li><?php echo $coach['line_6'];?></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php $consult = get_field('consultancy');?>
		<a name="consultant"></a>
		<section id="consultancy" class="l-background">
			<div class="container-xl">
				<div class="row">
					<div class="col-12 col-sm-5">
						<h3><?php echo $consult['heading'];?></h3>
						<p><?php echo $consult['content'];?></p>
						<ul class="green-check">
							<li><?php echo $consult['line_1'];?></li>
							<li><?php echo $consult['line_2'];?></li>
							<li><?php echo $consult['line_3'];?></li>
							<li><?php echo $consult['line_4'];?></li>
							<li><?php echo $consult['line_5'];?></li>
						</ul>
					</div>
					<div class="col-12 col-sm-5 offset-sm-1">
						<img src="<?php echo $consult['image'];?>">
					</div>
				</div>
			</div>
		</section>
		<section id="consultancy-mobile" class="l-background">
			<div class="container-xl">
				<div class="row">
					<div class="col-12">
						<img src="<?php echo $consult['image'];?>">
					</div>
					<div class="col-12">
						<h3><?php echo $consult['heading'];?></h3>
						<p><?php echo $consult['content'];?></p>
						<ul class="green-check">
							<li><?php echo $consult['line_1'];?></li>
							<li><?php echo $consult['line_2'];?></li>
							<li><?php echo $consult['line_3'];?></li>
							<li><?php echo $consult['line_4'];?></li>
							<li><?php echo $consult['line_5'];?></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php $psycho = get_field('psychometrics');?>
		<a name="psychometrics"></a>
		<section id="psychometrics" class="d-background bg-graphic">
			<div class="container-xl">
				<div class="row">
					<div class="col-12 col-sm-5">
						<img src="<?php echo $psycho['image'];?>">
					</div>
					<div class="col-12 offset-sm-1 col-sm-5">
						<h3><?php echo $psycho['heading'];?></h3>
						<p><?php echo $psycho['content'];?></p>
						<ul class="green-check">
							<li>
								<?php echo $psycho['line_1'];?>
							</li>
							<li>
								<?php echo $psycho['line_2'];?>
							</li>
							<li><?php echo $psycho['line_3'];?></li>
							<li><?php echo $psycho['line_4'];?></li>
							<li><?php echo $psycho['line_5'];?></li>
							<li><?php echo $psycho['line_6'];?></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>



<?php get_footer();?>