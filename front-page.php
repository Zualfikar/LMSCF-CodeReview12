<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
	<section class="row">
		<div class="col-lg-3 bg-secondary">
			
<?php if(is_active_sidebar('page_sidebar')): ?>

<?php dynamic_sidebar('page_sidebar'); ?>


<?php endif; ?>


		</div>

<div class="col-lg-9">
	


<?php get_template_part('includes/section','content'); ?>
</div>
</section>
</div>
</section>
<?php get_footer(); ?>