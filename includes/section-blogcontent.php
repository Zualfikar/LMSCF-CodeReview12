
	<?php if ( have_posts() ) : ?> 
<?php
// Start the Loop.
while ( have_posts() ) : the_post(); ?> 



<p><?php echo get_the_date('d/m/y h:i:s'); ?></p>



	 <?php the_content(); ?>

<?php 
$fname= get_the_author_meta('first_name');
$lname= get_the_author_meta('last_name');?>
<p>posted by : <?php echo $fname; ?>   <?php echo $lname; ?>

<?php 
$categories= get_the_category();
foreach ($categories as $cat ):?> 

	<a href="<?php echo get_category_link($cat->term_id); ?>">
<?php echo $cat->name; ?>
</a>
 <?php endforeach; ?>
</p>

<?php comments_template(); ?>
<?php endwhile;
endif; ?>