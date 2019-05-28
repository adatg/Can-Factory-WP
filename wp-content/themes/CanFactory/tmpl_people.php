<?php

/*
	Template Name: People
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<ul class="directory">
    <li><a target="_self" data-scroll-to="#tenants" data-scroll-speed="700" data-scroll-offset="-100">Current
        Tenants</a></li>
    <li><a href="alumni.html">Alumni Tenants</a></li>
</ul>
</div>
</div>
  <div class="container_custom" id="waypoint-trigger">
	<div class="wrapper">
        <h2 id="tenants" class="title"><?php the_field('section_title'); ?></h2>
        <p><?php the_field('title_subtext'); ?></p>
        <div class="people-wrapper">
        <?php the_field('table'); ?>
        </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>