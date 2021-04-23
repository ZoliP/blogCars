<div class="cat container">
    <?php the_category();?>
    <div class="image">
        <a href="<?php the_permalink(); ?>">
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-image');
                }
            ?>
        </a>
    </div>
    <div class="cat-article">
        <h6> <?php the_title();?></h6>	
        <p>  <?php the_date();?></p>
        <div class="c-article"> <?php the_excerpt(); ?></div>
        <p> <?php the_tags(); ?></p>	
    </div>
</div>

