<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Cars Template"> 
    	
	<!-- Lato Regular Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<!-- PT Sans Regular Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	
	<?php
		wp_head();
	?>
</head> 

<body >
    <header>
		<div class="container">
			<div class="row">	 	
				<div class="logo col-sm-4">
				<a href="#home"><img src="./wp-content/themes/blogCars/assets/images/logo.png" alt="logo"></a>
				</div>
  		
		  	<?php
		 		wp_nav_menu(
					 array(
						'menu' => 'primary',
						'container' => 'container',						
						'theme_location' =>'primary',
						'items_wrap' => '<ul id="" class="col-sm-4" >%3$s</ul>'
					 )
				); 
		  	?>
		  	<!--	<ul class="menu col-sm-4">
				  <li><a href="#home">Home</a></li>
				  <li><a href="#recipes">Recipes</a></li>
				  <li><a href="#article">Article</a></li>
				  <li><a href="#contact">Contact</a></li>
				  <li><a href="#purchase">Purchase</a></li>
  				</ul> 
			-->
  				<div class="search col-sm-4">
					<input type="text" class="form-control-plaintext" id="search" placeholder="Search">
	    			<a href="#search">
					<i class="fas fa-search"></i>
					</a>    		
  				</div>
			</div>
		</div>	
	</header>
	
	
		