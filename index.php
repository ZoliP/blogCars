<?php get_header()?>
    <div class="container hero" >

        <div class="hero-01"> 
            <?php $categoryPost = new WP_Query(array(
                'posts_per_page'=>'1',
                'category_name' =>'vehicle',
                'orderby' => 'date',
                'order' => 'DESC',
                )) ?>
            <?php if($categoryPost->have_posts()): ?>
                <?php while($categoryPost->have_posts()): ?>
                    <?php $categoryPost->the_post() ?>
                    <?php get_template_part('template-parts/content', 'hero-01');?>
                    <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
            <?php endif ?>                
        </div>

        <?php $categoryPost1 = new WP_Query(array(
            'posts_per_page'=>'5',
            'category_name' =>'vehicle',
            'orderby' => 'date',
            'order' => 'DESC', 
            )) ?>
        <?php if($categoryPost1->have_posts()): ?>
            <?php $i = 0 ; while($categoryPost1->have_posts()): ?>
                <?php $categoryPost1->the_post() ?>
                <?php if($i !== 0): // skip the first post ?>
                    <?php get_template_part('template-parts/content', 'hero-small');?>
                    <?php endif ?>
                    <?php $i++; endwhile ?>
                    <?php wp_reset_postdata(); ?>
        <?php endif ?> 

    </div> <!--.container .hero  --> 
<main> 
    <div class="container">
        <div class="articles">
            <?php $featuredPost = new WP_Query(array(
                'posts_per_page'=>'5',
                'category_name' =>'bmw',
                'orderby' => 'date',
                'order' => 'DESC', 
                )) 
            ?>
            <?php if($featuredPost->have_posts()): ?>
                <?php while($featuredPost->have_posts()): ?>
                    <?php $featuredPost->the_post() ?>
                    <?php get_template_part('template-parts/content', 'post');?>
                <?php endwhile ?>
                <?php endif ?> 
                <?php wp_reset_postdata(); ?>
        </div>

        <div class="col-sm-1"></div>

        <div class="col-sm-3 widget">

            <div class="about">	
            <?php $about = new WP_Query(array('posts_per_page'=>'1','category_name' =>'About'))?>		
                <?php if ($about -> have_posts()):?>
                    <?php while ($about -> have_posts()):?>
                        <?php $about -> the_post()?>
                        <?php get_template_part('template-parts/content', 'about');?>
                    <?php endwhile?>
                <?php endif?>
                <?php wp_reset_postdata();?>
            </div>

            <div class="popular">
                <h6>Popular posts</h6>                
                <!-- Installed Wordpress Popular Posts by Hector Cabrera to collect meta data about post views -->
                <?php $popularPost = new WP_Query( 
                        array( 
                            'posts_per_page' => '4', 
                            'meta_key' => 'views_daily', 
                            'orderby' => 'meta_value_num', 
                            'order' => 'DESC'  
                        ) 
                    )
                ?>
                <?php if ($popularPost->have_posts()): ?>
                    <?php while ($popularPost->have_posts()): ?>
                        <?php $popularPost->the_post() ?>
                        <?php get_template_part('template-parts/content', 'popular');?>
                        <?php endwhile ?>
                        <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>  
            </div>	
                
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
        </div> <!-- .widget -->
       
    </div><!-- .container -->

    <div class="container pagination">
    
        <?php wp_pagenavi();?>	

        <!-- <button type="button" class="pag btn i0"><i class="fas fa-angle-left"></i></button>
        <button type="button" class="pag btn i1">1</button>
        <button type="button" class="pag btn i2">2</button>
        <button type="button" class="pag btn i3">3</button>
        <button type="button" class="pag btn i4">...</button>
        <button type="button" class="pag btn i5">8</button>
        <button type="button" class="pag btn i6"><i class="fas fa-angle-right"></i></button> -->
    </div>

    <div class="container mpp">			
        Most popular
	</div>

    <div class="container most_popular">

        <?php 
            $popularPost = new WP_Query( 
                array( 
                    'posts_per_page' => '4', 
                    'meta_key' => 'views_total', 
                    'orderby' => 'meta_value_num', 
                    'order' => 'DESC'  
                ) 
            )
        ?>
        <?php if($popularPost->have_posts()): ?>
            <?php while ($popularPost->have_posts()): ?>
                <?php $popularPost->the_post() ?>
                <?php get_template_part('template-parts/content', 'most-popular');?>
                <?php endwhile ?>
                <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
	</div> <!-- .container .most-popular -->

</main>
<?php get_footer()?>