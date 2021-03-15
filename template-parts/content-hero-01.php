<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php 
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('hero-image-01');
        }
    ?>    
    <div class="category"> <?php the_category();?></div>  
    <div class="post-text-header">
        <p><?php the_author();?> - <?php the_date();?></p>	
        <h6><?php the_excerpt(); ?></h6>	
    </div> 	
</a>

