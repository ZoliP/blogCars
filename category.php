<?php
    get_header();
?>

<div class="container">
<h6>Categories</h6>
    <?php
    	if ( have_posts()) {
	    	while ( have_posts() ){
		    	the_post();
			    get_template_part('template-parts/content', 'category');
		    }   
	    }   
    ?>		
</div>

