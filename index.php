<?php
	get_header();
?>	
 

    <div class="container hero" >
        <div class="hero-01"> 
            <div class="mask">
                <a href="#hero-01">
                    <img src="./wp-content/themes/blogCars/assets/images/hero_01.png" alt="hero_01.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>

        <div class="hero-02">
            <div class="mask">				
                <a href="#hero-02">
                    <img src="./wp-content/themes/blogCars/assets/images/hero_02.png" alt="hero_03.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>

        <div class="hero-03">
            <div class="mask">
                <a href="#hero-03">
                    <img src="./wp-content/themes/blogCars/assets/images/hero_03.png" alt="hero_04.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>

        <div class="hero-04">
            <div class="mask">
                <a href="#hero-04">
                    <img src="./wp-content/themes/blogCars/assets/images/hero_04.png" alt="hero_02.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>
        
        <div class="hero-05">
            <div class="mask">
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
    </div>	 
			
	<main> 
		<div class="container">
			<div class="articles">

	            <?php $featuredPost = new WP_Query(array('posts_per_page'=>'5')) ?>
    	        <?php if($featuredPost->have_posts()): ?>
        	        <?php while($featuredPost->have_posts()): ?>
            	        <?php $featuredPost->the_post() ?>
                	    <?php get_template_part('template-parts/content', 'post');?>
	                <?php endwhile ?>
    	        <?php endif ?>     

				<?php
					the_posts_pagination();
				?>
				
				<!-- <a href="#article_01">
					<div class="article">
						<div class="image">
							<img src="./wp-content/themes/blogCars/assets/images/article_01.png" alt="article_01.png">
						</div>
						<div class="article_description">
							<div class="article-text-header">
								<div class="category"> Vehicle</div>  
								<h6> One of Saturn-s largest rings may be never than anyone</h6>	
								<p>  Rickie Baroch - June 6, 2019</p>	
								<p class="article_short">  Sed ut perspiciatis unde omnis iste natus error 
									sit voluptatem accusantium doloremque laudantium, totam rem sed ut perspiciatis 
									unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
									totam rem 
								</p>	
							</div> 
						</div>
					</div>	
				</a>

				<a href="#article_02">
					<div class="article">
						<div class="image">
							<img src="./wp-content/themes/blogCars/assets/images/article_02.png" alt="article_02.png">
						</div>
						<div class="article_description">
							<div class="article-text-header">
								<div class="category"> Vehicle</div>  
								<h6> One of Saturn-s largest rings may be never than anyone</h6>	
								<p>  Rickie Baroch - June 6, 2019</p>	
								<p class="article_short">  Sed ut perspiciatis unde omnis iste natus error 
									sit voluptatem accusantium doloremque laudantium, totam rem sed ut perspiciatis 
									unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
									totam rem 
								</p>	
							</div> 
						</div>
					</div>
				</a>
										
				<a href="#article_03">
					<div class="article">
						<div class="image">
							<img src="./wp-content/themes/blogCars/assets/images/article_03.png" alt="article_03.png">
						</div>
						<div class="article_description">
							<div class="article-text-header">
								<div class="category"> Vehicle</div>  
								<h6> One of Saturn-s largest rings may be never than anyone</h6>	
								<p>  Rickie Baroch - June 6, 2019</p>	
								<p class="article_short">  Sed ut perspiciatis unde omnis iste natus error 
									sit voluptatem accusantium doloremque laudantium, totam rem sed ut perspiciatis 
									unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
									totam rem 
								</p>	
							</div> 
						</div>
					</div>
				</a>
					
				<a href="#article_04">					
					<div class="article">
						<div class="image">
							<img src="./wp-content/themes/blogCars/assets/images/article_04.png" alt="article_04.png">
						</div>
						<div class="article_description">
							<div class="article-text-header">
								<div class="category"> Vehicle</div>  
								<h6> One of Saturn-s largest rings may be never than anyone</h6>	
								<p>  Rickie Baroch - June 6, 2019</p>	
								<p class="article_short">  Sed ut perspiciatis unde omnis iste natus error 
									sit voluptatem accusantium doloremque laudantium, totam rem sed ut perspiciatis 
									unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
									totam rem 
								</p>	
							</div> 
						</div>
					</div>
				</a>
					
				<a href="#article_05">										
					<div class="article">
						<div class="image">
							<img src="./wp-content/themes/blogCars/assets/images/article_05.png" alt="article_05.png">
						</div>
						<div class="article_description">
							<div class="article-text-header">
								<div class="category"> Vehicle</div>  
								<h6> One of Saturn-s largest rings may be never than anyone</h6>	
								<p>  Rickie Baroch - June 6, 2019</p>	
								<p class="article_short">  Sed ut perspiciatis unde omnis iste natus error 
									sit voluptatem accusantium doloremque laudantium, totam rem sed ut perspiciatis 
									unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
									totam rem 
								</p>	
   	            			</div> 
						</div>
					</div>						
				</a> -->
			</div>
		
			<div class="col-sm-1"></div>

			<div class="col-sm-3 widget">
				<a href="#about">			
					<div class="about">
						<img src="./wp-content/themes/blogCars/assets/images/w_about_us.png" alt="w_about_us.png">
						<h6> Leon Hunt</h6>
						<p>Car blogger</p>
						<p class="author_description"> Hi. I'm Leon. Rewieving cars is the way I express my creative side to the world. Welcome to my 
							Cars Blog site 
						</p>
						<button type="submit" class="submit btn btn-lg btn-block">Continue reading</button>
					</div>
				</a>
															
				<div class="popular">
					<h6>Popular posts</h6>
					 <a href="#popular_01">
						<div class="popular_post">
							<img src="./wp-content/themes/blogCars/assets/images/w_popular_post_01.png" alt="w_popular_post_01.png">
							<div class="category"> Vehicle</div> 
							<h6>One of Saturn's largest rings may be never than anyone</h6>								<p>Richie Baroch - June 6, 2019</p>
						</div>	
					</a>
					
					<a href="#popular_02">
						<div class="popular_post">
							<img src="./wp-content/themes/blogCars/assets/images/w_popular_post_02.png" alt="w_popular_post_02.png">
							<div class="category"> Vehicle</div> 
							<h6>One of Saturn's largest rings may be never than anyone</h6>
							<p>Richie Baroch - June 6, 2019</p>
						</div>	
					</a>
					
					<a href="#popular_03">
						<div class="popular_post">
							<img src="./wp-content/themes/blogCars/assets/images/w_popular_post_03.png" alt="w_popular_post_03.png">
							<div class="category"> Vehicle</div> 
							<h6>One of Saturn's largest rings may be never than anyone</h6>
							<p>Richie Baroch - June 6, 2019</p>
						</div>	
					</a> 

					<!-- <?php 
						$popularPost = new WP_Query( 
							array( 
								'posts_per_page' => '4', 
								'meta_key' => 'wpb_post_views_count', 
								'orderby' => 'meta_value_num', 
								'order' => 'DESC'  
								) 
						)
					?>
					<?php while ($popularPost->have_posts()): ?>
						<?php $popularPost->the_post() ?>
						<?php the_title() ?>
					<?php endwhile ?>	
					 -->



				</div>
				<div class="instagram">
					<!-- <h6>Instagram</h6>
					<div class="pic_block">
						<div class="i1"><img src="./wp-content/themes/blogCars/assets/images/w_instagram_01.png" alt="w_instagram_01.png"></div>
						<div class="i2"><img src="./wp-content/themes/blogCars/assets/images/w_instagram_02.png" alt="w_instagram_02.png"></div>
						<div class="i3"><img src="./wp-content/themes/blogCars/assets/images/w_instagram_03.png" alt="w_instagram_03.png"></div>
						<div class="i4"><img src="./wp-content/themes/blogCars/assets/images/w_instagram_04.png" alt="w_instagram_04.png"></div>
						<div class="i5"><img src="./wp-content/themes/blogCars/assets/images/w_instagram_05.png" alt="w_instagram_05.png"></div>
						<div class="i6"><img src="./wp-content/themes/blogCars/assets/images/w_instagram_06.png" alt="w_instagram_06.png"></div>
					</div> -->

					<?php
						dynamic_sidebar('sidebar-3');
					?>

					<button type="submit" class="submit btn btn-lg btn-block">
						<i class="fab fa-instagram"></i>View instagram			 	
					</button>
				</div>

				<div class="tag_section">
				<!--
				 <h6>Tags</h6>
					<div class="tag_block">
						<button type="button" class="tag btn ">Business</button>
						<button type="button" class="tag btn ">Freelance</button>
						<button type="button" class="tag btn ">Money</button>
						<button type="button" class="tag btn ">Experience</button>
						<button type="button" class="tag btn ">Lifestyle</button>
						<button type="button" class="tag btn ">SEO</button>
						<button type="button" class="tag btn ">Wordpress</button>
						<button type="button" class="tag btn ">Marketing</button>
						<button type="button" class="tag btn ">UX</button>
						<button type="button" class="tag btn ">Modern</button>
						<button type="button" class="tag btn ">Success</button>
						<button type="button" class="tag btn ">Nature</button>
						<button type="button" class="tag btn ">Productivity</button>
						<button type="button" class="tag btn ">Sales Page</button>
						<button type="button" class="tag btn ">Sell</button>
						<button type="button" class="tag btn ">Teamwork</button>
						<button type="button" class="tag btn ">Monetize</button>						
					</div> -->
					<?php
						dynamic_sidebar('sidebar-4');
					?> 
				</div> 


				<div class="subscription">
					<h6>Email newsletter</h6>
					<p class="subscription_short">Sign up to receive email updates and to hear what's going on. </p>
					<form>
						<div class="form-group">
							<input type="text" class="form-control-plaintext" id="name" placeholder="Your name">
						</div>
 						<div class="form-group">
  							<input type="text" class="form-control-plaintext" id="email" placeholder="Your email address">
  						</div>
  						<button type="submit" class="submit btn btn-lg btn-block">Subscribe to newsletter</button>
					</form>
				</div>
			</div>
		</div>

		<!-- <div class="container pagination">
			<button type="button" class="pag btn i0"><i class="fas fa-angle-left"></i></button>
			<button type="button" class="pag btn i1">1</button>
			<button type="button" class="pag btn i2">2</button>
			<button type="button" class="pag btn i3">3</button>
			<button type="button" class="pag btn i4">...</button>
			<button type="button" class="pag btn i5">8</button>
			<button type="button" class="pag btn i6"><i class="fas fa-angle-right"></i></button>
		</div> -->
	
		
		<div class="container mpp">			
			Most popular
		</div>

		<div class="container most_popular">
			<div class="col-sm-3">
				<a href="#most_popular_01">
					<div class="popular_post">
						<img src="./wp-content/themes/blogCars/assets/images/most_popular_01.png" alt="most_popular_01.png">
						<div class="category">BMW</div> 
						<h6>One of Saturn's largest rings may be never than anyone</h6>
						<p>Richie Baroch - June 6, 2019</p>
					</div>	
				</a>
			</div>		
			<div class="col-sm-3">
				<a href="#most_popular_02">
					<div class="popular_post">
						<img src="./wp-content/themes/blogCars/assets/images/most_popular_02.png" alt="most_popular_02.png">
						<div class="category">BMW</div> 
						<h6>One of Saturn's largest rings may be never than anyone</h6>
						<p>Richie Baroch - June 6, 2019</p>
					</div>	
				</a>
			</div>		
			<div class="col-sm-3">
				<a href="#most_popular_03">
					<div class="popular_post">
						<img src="./wp-content/themes/blogCars/assets/images/most_popular_03.png" alt="most_popular_03.png">
						<div class="category">BMW</div> 
						<h6>One of Saturn's largest rings may be never than anyone</h6>
						<p>Richie Baroch - June 6, 2019</p>
					</div>	
				</a>
			</div>		
			<div class="col-sm-3">
				<a href="#most_popular_04">
					<div class="popular_post">
						<img src="./wp-content/themes/blogCars/assets/images/most_popular_04.png" alt="most_popular_04.png">
						<div class="category">BMW</div> 
						<h6>One of Saturn's largest rings may be never than anyone</h6>
						<p>Richie Baroch - June 6, 2019</p>
					</div>	
				</a>					
			</div>			
		</div>
	</main>
	
<?php
	get_footer();
?> 
 