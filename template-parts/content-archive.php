<div class="archive">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h6> <?php the_title();?></h6>	
        <p> <?php the_date();?></p>
        <div class="a-article"> <?php the_content(); ?></div>
    </a>
    <p> <?php the_tags();?></p>
</div>
