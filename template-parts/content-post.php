<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="article">
        <div class="image">
        <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('');
                }
            ?>    
        </div>
        <div class="article_description">
            <div class="article-text-header">
                <div class="category"> Vehicle </div>  
                <h6><?php the_title();?></h6>	
                <p><?php the_author();?> - <?php the_date();?></p>	
                <span class="article_short"><?php the_content(); ?></span>	
            </div> 
        </div>
    </div>
</a>