<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Cars Template"> 
    	
	<?php
		wp_head();
	?>
</head> 

<body >
    <header>
		<div class="container">
			<div class="row">	 	
				<div class="logo col-sm-4">
				<?php
					if (function_exists('the_custom_logo')){
						the_custom_logo();
					}
				?>
				<!-- <a href="#home"><img src="./wp-content/themes/blogCars/assets/images/logo.png" alt="logo"></a> -->
				</div>
  		
		  		 <?php
		 			wp_nav_menu(
					 array(
						'menu' => 'primary',
						'container' => 'container',						
						'theme_location' =>'primary',
						'items_wrap' => '
						<div class="col-sm-4">
							<nav class="navbar navbar-expand-lg justify-content-center" style="padding:0;">
						  		<button class="navbar-toggler align-bottom navbar-button-custom" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon navbar-custom"></span>
						  		</button>
						  		<div class="collapse navbar-collapse" id="navbarNav">
									<ul class="navbar-nav">%3$s</ul> 
								</div>
							</nav>
						</div>'
					 )
					); 
		  		?>
				<!-- <div class="col-sm-4">
					<nav class="navbar navbar-expand-lg justify-content-center" style="padding:0;">
					<button class="navbar-toggler align-bottom navbar-button-custom" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon navbar-custom"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#recipes">Recipes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#article">Article</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#purchase">Purchase</a>
							</li>
						</ul>
					</div>
					</nav>
				</div> -->

					
  				<div class="search col-sm-4">
					<?php get_search_form();?>
				    <!-- <input id="search" type="text" class="search-input" placeholder="Search"> -->
	    			<!-- <a href="#search">
						<i class="icon fas fa-search"></i>
					</a>     -->
  				</div>
			</div>
		</div>	
	</header>

	
		

	
	
	
		