<?php get_header()?>
    <div class="container hero" >

        <div class="hero-01"> 
            <div class="mask-01">               
                <?php $categoryPost = new WP_Query(array(
                    'posts_per_page'=>'1',
                    'category_name' =>'vehicle',
                    'tag' =>'hero',
                    )) ?>
                <?php if($categoryPost->have_posts()): ?>
                    <?php while($categoryPost->have_posts()): ?>
                        <?php $categoryPost->the_post() ?>
                        <?php get_template_part('template-parts/content', 'hero-01');?>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile ?>
                <?php endif ?>                
            </div>
        </div>

        <?php $categoryPost1 = new WP_Query(array(
            'posts_per_page'=>'5',
            'category_name' =>'vehicle',
            'tag' =>'hero',
            )) ?>
        <?php if($categoryPost1->have_posts()): ?>
            <?php $i = 0 ; while($categoryPost1->have_posts()): ?>
                <?php $categoryPost1->the_post() ?>
                <?php if($i !== 0): // skip the first post ?>
                    <?php get_template_part('template-parts/content', 'hero-small');?>
                    <?php wp_reset_postdata(); ?>
                <?php endif ?>
            <?php $i++; endwhile ?>
        <?php endif ?> 

        <!--<div class="hero-small">
            <div class="mask">
                 <a href="#hero-02">
                    <img id="img" src="./wp-content/themes/blogCars/assets/images/hero_02.png" alt="hero_02.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a> 
            </div>
        </div>

        <div class="hero-small">
            <div class="mask">
                <a href="#hero-03">
                    <img id="img" src="./wp-content/themes/blogCars/assets/images/hero_03.png" alt="hero_03.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>

        <div class="hero-small">
            <div class="mask">
                <a href="#hero-04">
                    <img id="img" src="./wp-content/themes/blogCars/assets/images/hero_04.png" alt="hero_04.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>
        
        <div class="hero-small">
            <div class="mask">
                <a href="#hero-05">
                    <img id="img" src="./wp-content/themes/blogCars/assets/images/hero_05.png" alt="hero_05.png">
                    <div class="category"> Vehicle</div>  
                    <div class="post-text-header">
                        <p>  Rickie Baroch - June 6, 2019</p>	
                        <h6> One of Saturn-s largest rings may be never than...</h6>	
                    </div> 	
                </a>
            </div>
        </div>  -->

    </div> <!--container hero  --> 
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