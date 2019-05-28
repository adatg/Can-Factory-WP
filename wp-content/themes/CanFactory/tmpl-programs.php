<?php

/*
	Template Name: Programs
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<ul class="directory">
        <li><a target="_self" data-scroll-to="#factory" data-scroll-speed="700" data-scroll-offset="-100">At the Can
            Factory</a></li>
        <li><a target="_self" data-scroll-to="#offsite" data-scroll-speed="700" data-scroll-offset="-100">Tenants events
            off site</a></li>
      </ul>
    </div>
  </div>

  <div class="container_custom" id="waypoint-trigger">
    <div class="wrapper">
      <h2 id="factory"><?php the_field('section_title_onsite'); ?></h2>
      <?php
      if( have_rows('event_onsite') ): while ( have_rows('event_onsite') ) : the_row(); ?>
        <div class="program-wrapper">
          <h3><?php the_sub_field('event_title_onsite'); ?></h3>
          <?php the_sub_field('event_details_onsite'); ?>
        </div>
        <?php endwhile; endif; ?>

      <h2 id="offsite"><?php the_field('section_title_offsite'); ?></h2>
      <?php
      if( have_rows('event_offsite') ): while ( have_rows('event_offsite') ) : the_row(); ?>
        <div class="program-wrapper">
          <h3><?php the_sub_field('event_title_offsite'); ?></h3>
          <?php the_sub_field('event_details_offsite'); ?>
        </div>
        <?php endwhile; endif; ?>

  <?php endwhile; endif; ?>

  <?php get_footer(); ?>