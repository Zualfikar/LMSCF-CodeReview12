<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">
		


<section class="row">
		<div class="col-lg-3 bg-secondary">
			
<?php if(is_active_sidebar('blog_sidebar')): ?>

<?php dynamic_sidebar('blog_sidebar'); ?>


<?php endif; ?>


		</div>
		<div class="col-lg-9 d-flex flex-wrap">


	<?php get_template_part('includes/section','archive'); ?>



	</div>
</section>
<?php comments_template(); ?>
<?php get_footer(); ?>