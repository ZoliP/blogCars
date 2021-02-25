<div class="single container">
    <div class="image">
        <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('');
            }
        ?>
    </div>
    <?php the_category();?> 
    <div class="single-article">
        <h6> <?php the_title();?></h6>	
        <p>  <?php the_author();?> - <?php the_date();?></p>
        <p> <?php the_tags(); ?></p>	
        <div class="s-article"> <?php the_content(); ?></div>
        <?php comments_template(); ?>
    </div>
</div>
