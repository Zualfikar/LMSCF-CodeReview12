<?php if ( have_posts() ) : ?> 
<?php
// Start the Loop.
while ( have_posts() ) : the_post(); ?> 
	<h4><?php the_content(); ?></h4> 

<?php if(has_post_thumbnail()): ?>

<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
<?php endif; ?>



<?php endwhile;
endif; ?>
