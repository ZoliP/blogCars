<?php
	get_header();
?>

	<div class="single container">
	    <div class="single-article">
            <?php if(have_posts()): ?>
                <?php while (have_posts()):?>
                    <?php the_post();?>
                    <?php the_title('<h6>','</h6>');?>
                    <?php the_content();?>
                <?php endwhile ?>
            <?php endif ?>
        </div>
    </div>

