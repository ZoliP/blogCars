<footer>
		<div class="container">
			<div class="row">
				<div class="logo col-sm-3">	
					<?php
						if (function_exists('the_custom_logo')){
							the_custom_logo();
						}
					?>					
					<!-- <a href="#home"><img src="./wp-content/themes/blogCars/assets/images/logo.png" alt="logo"></a> -->
					<!-- <p>Short description 
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil illo tempore aut 
						repudiandae, obcaecati, reiciendis, sequi esse earum ratione laboriosam aliquid 
						architecto veniam illum ducimus optio assumenda in consequuntur voluptate. 
					</p> -->
					<?php
						dynamic_sidebar('footer-1');
					?>
					<div class="touch"> 
						<!-- <h5>Keep in touch</h5>
						<div class="social">
							<a href="#facebook"><i class="fab fa-facebook-square"></i></a>
							<a href="#twitter"><i class="fab fa-twitter-square"></i></a>
							<a href="#pinterest"><i class="fab fa-pinterest-square"></i></a>
							<a href="#googleplus"><i class="fab fa-google-plus-square"></i></a>
							<a href="#instagram"><i class="fab fa-instagram-square"></i></a>
						</div> -->
						<?php
							dynamic_sidebar('footer-2');
						?>
					</div>					
				</div>	
				<div class="col-sm-1"></div>
				<div class="recent col-sm-3">
					<h5>Recent posts</h5>
					<div class="recent-post">

						<?php $popularPost = new WP_Query(array( 'posts_per_page' => '3'))?>
						<?php if($popularPost->have_posts()): ?>
							<?php while ($popularPost->have_posts()): ?>
								<?php $popularPost->the_post() ?>
								<?php get_template_part('template-parts/content', 'recent');?>
								<?php endwhile ?>
								<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?> 

					</div>	<!-- .recent-post -->

					<!--<div class="post">
						 <a href="#recent_01"> 
                            <div>
							    <img src="./wp-content/themes/blogCars/assets/images/recent_01.png" alt="recent_01">
							    <div class="post-text-footer">
								    <h6>  One of Saturn-s largest rings may be never than...</h6>	
								    <p>  Rickie Baroch - June 6, 2019</p>	
                                </div>
                            </div>
						</a> 
					</div>										
					<div class="post">
						<a href="#recent_02"> 
                            <div>
							    <img src="./wp-content/themes/blogCars/assets/images/recent_02.png" alt="recent_02">
							    <div class="post-text-footer">
								    <h6>  One of Saturn-s largest rings may be never than...</h6>	
								    <p>  Rickie Baroch - June 6, 2019</p>	
                                </div>
                            </div>
						</a>
					</div>
					<div class="post">
						<a href="#recent_03"> 
                            <div>
							    <img src="./wp-content/themes/blogCars/assets/images/recent_03.png" alt="recent_03">
							    <div class="post-text-footer">
								    <h6>  One of Saturn-s largest rings may be never than...</h6>	
								    <p>  Rickie Baroch - June 6, 2019</p>	
                                </div>
                            </div>
						</a>
					</div>-->
				</div>	<!-- .recent .col-sm-3 -->
				<div class="col-sm-1"></div>				
				<div class="newsletter col-sm-3">
					<h5>Newsletter</h5>
					<form>
  						<div class="form-group">
    						<input type="text" class="form-control-plaintext" id="name" placeholder="Your name">
  						</div>
  						<div class="form-group">
   							<input type="email" class="form-control-plaintext" id="email" placeholder="Your email address">
  						</div>
  						<button type="submit" class="submit btn btn-lg btn-block">Subscribe to newsletter</button>
					</form>
				</div>	
				<div class="col-sm-1"></div>				
			</div>			
		</div>
	</footer>
	<div class="footer_with_menu">
		<div class="container">
			<div class="row">
				<div class="rights col-sm-8">
					<p> @<?php echo date('Y'); ?> Z. All Rights Reserved.</p>	
				</div>

				<?php
		 		wp_nav_menu(
					array(
						'menu' => 'footer',
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
			</div>			
		</div>
	</footer>

<?php
	wp_footer();
?> 

</body>
</html>