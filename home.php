<?php
	get_header();
?>

<div class="container">
    <h3 class="pageTitles">Articles</h3>
	<?php
		if ( have_posts()) {
			while ( have_posts() ){
				the_post();
				get_template_part('template-parts/content', 'home-posts');
			}   
		}   
	?>
    <?php zoltan_pagination()?>	
</div>

<?php
	get_footer();
?>