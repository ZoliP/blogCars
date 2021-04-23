<img src="<?php the_post_thumbnail_url('popular');?>" alt="<?php the_title();?>">
<h6> <?php the_title();?></h6>
<?php the_tags('<p>','</p>'); ?>
 <?php the_excerpt('<p class="author_description">','</p>');?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <button type="submit" class="submit btn btn-lg btn-block">Continue reading</button>
</a>