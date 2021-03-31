<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="cat container">
    <?php the_category();?>
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-image');
                }
            ?>
        </div>
        <div class="cat-article">
            <h6> <?php the_title();?></h6>	
            <p>  <?php the_date();?></p>
            <div class="c-article"> <?php the_excerpt(); ?></div>
            <p> <?php the_tags(); ?></p>	
        </div>
    </a>
    </div>
</a>

