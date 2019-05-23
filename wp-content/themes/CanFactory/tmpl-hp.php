<?php

/*
	Template Name: Homepage
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

</div>
</div>
  <div class="container_custom">
    <div class="wrapper">
      <div class="text-body">
        <?php the_field('main_text'); ?>
      </div>
    </div>   
  </div> 
  <?php endwhile; endif; ?>

  <?php get_footer(); ?>