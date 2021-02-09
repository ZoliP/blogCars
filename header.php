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
  				<div class = "search col-sm-4">
					<input id="search" type="text" class="search-input" placeholder="Search">
	    			<a href="#search">
						<i class="fas fa-search"></i>
					</a>    
  				</div>
			</div>
		</div>	
	</header>

	
		<div class="container hero" >
			<div class="hero-01"> 
				<a href="#hero-01">
					<img src="./wp-content/themes/blogCars/assets/images/hero_01.png" alt="hero_01.png">
					<div class="category"> Vehicle</div>  
					<div class="post-text-header">
                    	<p>  Rickie Baroch - June 6, 2019</p>	
						<h6> One of Saturn-s largest rings may be never than...</h6>	
                	</div> 	
				</a>
			</div>

			<div class="hero-02">				
				<a href="#hero-02">
					<img src="./wp-content/themes/blogCars/assets/images/hero_02.png" alt="hero_03.png">
					<div class="category"> Vehicle</div>  
					<div class="post-text-header">
                   		<p>  Rickie Baroch - June 6, 2019</p>	
						<h6> One of Saturn-s largest rings may be never than...</h6>	
                	</div> 	
				</a>
			</div>

			<div class="hero-03">
				<a href="#hero-03">
					<img src="./wp-content/themes/blogCars/assets/images/hero_03.png" alt="hero_04.png">
					<div class="category"> Vehicle</div>  
					<div class="post-text-header">
                   		<p>  Rickie Baroch - June 6, 2019</p>	
						<h6> One of Saturn-s largest rings may be never than...</h6>	
               		</div> 	
				</a>
			</div>

			<div class="hero-04">
				<a href="#hero-04">
					<img src="./wp-content/themes/blogCars/assets/images/hero_04.png" alt="hero_02.png">
					<div class="category"> Vehicle</div>  
					<div class="post-text-header">
                   		<p>  Rickie Baroch - June 6, 2019</p>	
						<h6> One of Saturn-s largest rings may be never than...</h6>	
               		</div> 	
				</a>
			</div>
			
			<div class="hero-05">
				<a href="#hero-05">
					<img src="./wp-content/themes/blogCars/assets/images/hero_05.png" alt="hero_05.png">
					<div class="category"> Vehicle</div>  
					<div class="post-text-header">
                   		<p>  Rickie Baroch - June 6, 2019</p>	
						<h6> One of Saturn-s largest rings may be never than...</h6>	
               		</div> 	
				</a>
			</div>
		</div>	

	
	
	
		