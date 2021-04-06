<div class="home container">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="image">
        <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('');
            }
        ?>
    </div>
    <?php the_category();?> 
    <div class="home-article">
        <h6> <?php the_title();?></h6>	
        <p> <?php the_author();?> - <?php the_date();?></p>
        <p> <?php the_tags(); ?></p>	
        <div class="h-article"> <?php the_excerpt(); ?></div>
        <?php comments_template(); ?>
    </div>
</a>
</div>
