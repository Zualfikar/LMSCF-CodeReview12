<?php get_header(); ?>

<div class="container">
<h1><?php the_title(); ?></h1>
	<?php if(has_post_thumbnail()): ?>

<img src="<?php the_post_thumbnail_url('largest'); ?>" class="img-fluid">
<?php endif; ?>
	<div class="row">

		<div class="col-lg-6">
	


	<?php get_template_part('includes/section','blogcontent') ?>

</div>
<div class="col-lg-6">
	<ul>

		<?php if(get_post_meta($post->ID,'destination',true)): ?>
		<li>Destination: <?php echo get_post_meta($post->ID,'destination',true); ?></li>
	<?php endif; ?>
	<?php if(get_post_meta($post->ID,'price',true)):?>
			<li>Price: <?php echo get_post_meta($post->ID,'price',true); ?></li>
		<?php endif; ?>
	</ul>

</div>
</div>
</div>
<?php get_footer(); ?>