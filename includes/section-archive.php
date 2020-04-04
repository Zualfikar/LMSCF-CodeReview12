
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<div class="card m-4">
			
		<div class="card-body m-1">

			<?php if(has_post_thumbnail()): ?>

<img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid">
<?php endif; ?>
<h3><?php  the_title(); ?></h3>
	
<a href="<?php the_permalink(); ?>" class="btn btn-success">read more </a>
</div>
</div>

<?php endwhile;
endif; ?>
