<?php

/*
	Template Name: Contact
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<ul class="directory">
    <li><a target="_self" href="#general">general</a></li>
    <li><a target="_self" href="#address">address</a></li>
    <li><a target="_self" href="#transit">MASS TRANSIT</a></li> 
    <li><a target="_self" href="#driving">DRIVING</a></li> 
    <li><a target="_self" href="#parking">PARKING</a></li>
    <li><a target="_self" href="#access">ACCESS</a></li>
</ul>
</div>
</div>
<div class="container_custom" id="waypoint-trigger">
	<div class="wrapper">
		<div class="section-general">
			<h2><?php the_field('general_title'); ?></h2>
			<?php the_field('general_text'); ?>
		</div>

		<div id="address" class="section-address">
			<h2><?php the_field('address_title'); ?></h2>				
			<?php the_field('address_text'); ?>
		</div>
	
		<div id="transit" class="section-transit">
			<h2><?php the_field('transit_title'); ?></h2>
			<?php the_field('transit_text'); ?>
		</div>
	
		<div id="driving" class="section-driving">
			<h2><?php the_field('driving_title'); ?></h2>
			<?php the_field('driving_text'); ?>	
		</div>
	
		<div id="parking" class="section-parking">
			<h2><?php the_field('parking_title'); ?></h2>
			<?php the_field('parking_text'); ?>
		</div>
	
		<div id="access" class="section-access">
			<h2><?php the_field('access_title'); ?><img  src="<?php bloginfo('template_url'); ?>/contact_files/hcap1.gif" width="40" height="40"></h2>
			<?php the_field('access_text'); ?>
		</div>
	
<?php endwhile; endif; ?>

<?php get_footer(); ?>