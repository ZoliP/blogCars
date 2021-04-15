<?php
	get_header();
?>

	<div class="single container">
	    <div class="single-article">
            <?php if(have_posts()): ?>
            
                
                <?php while (have_posts()):?>
                    <?php the_post();?>
                    <?php the_title('<h5 class="pageTitles">','</h5>');?>
                    <div class="img-fluid">
                        <?php if(has_post_thumbnail()) {
                            the_post_thumbnail('post-image'); } 
                        ?>
                        <?php the_content();?>
                    </div>
                <?php endwhile ?>
            <?php endif ?>
        </div>
    </div>
    
<?php
	get_footer();
?>

