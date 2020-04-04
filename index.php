<?php get_header(); ?>

<?php 
if(have_posts()):
while(have_posts()): the_post();?>
<div class="card" >
 
  <div class="card-body">
    <h5 class="card-title"> <?php the_title(); ?>
</h5>
    <p class="card-text"><?php the_content(); ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



<?php endwhile; endif; ?>
<?php get_footer(); ?>