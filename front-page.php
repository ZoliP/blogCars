<?php get_header()?>
    <div class="container hero" >
        <div class="hero-01"> 
            <div class="mask-01">
                <a href="#hero-01">
                    <img id="img-01" src="./wp-content/themes/blogCars/assets/images/hero_01.png" alt="hero_01.png">
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
                    <img id="img-02" src="./wp-content/themes/blogCars/assets/images/hero_02.png" alt="hero_03.png">
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
                    <img id="img-03" src="./wp-content/themes/blogCars/assets/images/hero_03.png" alt="hero_04.png">
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
                    <img id="img-04" src="./wp-content/themes/blogCars/assets/images/hero_04.png" alt="hero_02.png">
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
                    <img id="img-05" src="./wp-content/themes/blogCars/assets/images/hero_05.png" alt="hero_05.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>
    </div><!--container hero  -->
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
        </div>

        <div class="col-sm-1"></div>

        <div class="col-sm-3 widget"> 
            <div class="instagram">
	    		<?php
                    dynamic_sidebar('sidebar-1');
                ?>
                <button type="submit" class="submit btn btn-lg btn-block">
                    <i class="fab fa-instagram"></i>View instagram			 	
                </button>
            </div>

            <div class="tag_section">
                <?php
                    dynamic_sidebar('sidebar-2');
                ?> 
            </div>
        </div>

       
    </div>
</main>
<?php get_footer()?>