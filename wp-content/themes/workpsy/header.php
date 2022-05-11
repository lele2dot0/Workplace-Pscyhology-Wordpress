<head>
 <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Mulish:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php wp_head();?>

<title>Workplace Pyschology</title>	
</head>
<body>
<header class = "container py-2">
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="http://www.workplace-psychology.com"><img id="logo" src="<?php bloginfo('template_directory');?>/assets/img/logo.svg"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <?php
		  wp_nav_menu(

		  	array(

		  		'theme_location' => 'navigation',
		  		'menu' => 'navigation',
		  		'container' => 'ul',
		  		'menu_class' => 'navbar-nav float-right ml-auto',


		  	)

		  );?>
	  </div>
	</nav>
</header>