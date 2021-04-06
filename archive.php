<?php
    get_header();
?>

 <div class="container"> 
	<h3 class="pageTitles">Archive posts</h3> 
	<?php
    	if ( have_posts()) {
	    	while ( have_posts() ){
		    	the_post();
			    get_template_part('template-parts/content', 'archive');
		    }   
	    }   
    ?>
	<div class="prevnext">
		<?php previous_posts_link();?>  		
		<?php next_posts_link();?>  		
	</div>
</div> 

