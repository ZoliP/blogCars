<div class="post">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
    <?php 
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('footer-recent');
        }
    ?>   
        <div class="post-text-footer">
            <?php the_title('<h6>','</h6>');?>	
            <p><?php the_author();?> - <?php the_date();?></p>
        </div>
</a>
</div>