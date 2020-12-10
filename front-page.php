<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Cars Template</title>
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
	<link rel="stylesheet" media="only screen and (max-width: 530px)" href="">
	
	<?php
		wp_head();
	?>
</head> 

<body >
    <header class="header">
		<div class="container">
			<div class="row">	 	
				<div class="logo col-sm-4">
				<a href="#home"><img src="./wp-content/themes/blogCars/assets/images/logo.png" alt="logo"></a>
				</div>
  		
		  		<div class="menu col-sm-4">
					<a href="#home">Home</a>
					<a href="#recipes">Recipes</a>
		  			<a href="#article">Article</a>
		  			<a href="#contact">Contact</a>
		  			<a href="#purchase">Purchase</a>
  				</div> 
  				
  				<div class="search col-sm-4">
	    			<a href="#search"><i class="fas fa-search"></i></a>    		
  				</div>
			</div>
		</div>	
	</header>
	
	<main class ="main"> 
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					This is the main section 
				</div>	
			</div>	
		</div>			
	</main>
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="logo col-sm-3">						
						<a href="#home"><img src="./wp-content/themes/blogCars/assets/images/logo.png" alt="logo"></a>
						<p>Short description 
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil illo tempore aut 
							repudiandae, obcaecati, reiciendis, sequi esse earum ratione laboriosam aliquid 
							architecto veniam illum ducimus optio assumenda in consequuntur voluptate. 
						</p>
						<div class="touch"> 
							<h6>Keep in touch</h6>
							<div class="social">
								<a href="#facebook"><i class="fab fa-facebook-square"></i></a>
								<a href="#twitter"><i class="fab fa-twitter-square"></i></a>
								<a href="#pinterest"><i class="fab fa-pinterest-square"></i></a>
								<a href="#googleplus"><i class="fab fa-google-plus-square"></i></a>
								<a href="#instagram"><i class="fab fa-instagram-square"></i></a>
							</div>
						</div>					
				</div>	
				<div class="col-sm-1"></div>
				<div class="recent col-sm-3">
					<h6>Recent posts</h6>
				</div>	
				<div class="col-sm-1"></div>				
				<div class="newsletter col-sm-3">
					<h6>Newsletter</h6>
				</div>	
				<div class="col-sm-1"></div>				
			</div>			
		</div>
	</footer>

</body>
</html>