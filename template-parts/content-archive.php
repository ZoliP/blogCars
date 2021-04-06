<div class="archive">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h6> <?php the_title();?></h6>	
        <p> <?php the_date('F j, Y g:i a ');?></p>
        <div class="a-article"> <?php the_excerpt(); ?></div>
    </a>
    <p> <?php the_tags();?></p>
</div>
