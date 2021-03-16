<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="single container">
        <div class="image">
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-image');
                }
            ?>
        </div>
        <div class="single-article">
            <h6> <?php the_title();?></h6>	
            <p>  <?php the_date();?></p>
            <p> <?php the_tags(); ?></p>	
            <div class="s-article"> <?php the_content(); ?></div>
        </div>
    </div>
</a>