<?php
	get_header();
?>

<div class="container">
    <h5 class="pageTitles title">Articles</h5>
	<?php
		if ( have_posts()) {
			while ( have_posts() ){
				the_post();
				get_template_part('template-parts/content', 'home-posts');
			}   
		}   
	?>
	<div class="container pagination">
    	<?php zoltan_pagination()?>	
	</div>
</div>

<?php
	get_footer();
?>