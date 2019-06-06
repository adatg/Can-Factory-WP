<?php

/*
	Template Name: Contact
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<ul class="directory">
    <li><a target="_self" data-scroll-to="#general" data-scroll-speed="700" data-scroll-offset="-170">general</a></li>
    <li><a target="_self" data-scroll-to="#address" data-scroll-speed="700" data-scroll-offset="-170">address</a></li>
    <li><a target="_self" data-scroll-to="#transit" data-scroll-speed="700" data-scroll-offset="-160">MASS TRANSIT</a></li> 
    <li><a target="_self" data-scroll-to="#driving" data-scroll-speed="700" data-scroll-offset="-150">DRIVING</a></li> 
    <li><a target="_self" data-scroll-to="#parking" data-scroll-speed="700" data-scroll-offset="-170">PARKING</a></li>
	<li><a target="_self" data-scroll-to="#access" data-scroll-speed="700" data-scroll-offset="-170">ACCESS</a></li>
	<li><a target="_self" data-scroll-to="#staff" data-scroll-speed="700" data-scroll-offset="-150">STAFF</a></li>
</ul>
</div>
</div>
<div class="container_custom" id="waypoint-trigger">
	<div class="wrapper">
		<div id="general" class="section-general">
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

		<div id="staff" class="section-staff">
			<h2><?php the_field('staff_title'); ?></h2>
			<div class="people-wrapper">
				<?php
				  if( have_rows('department') ): while ( have_rows('department') ) : the_row(); ?>
				  
        		<div class="person-wrapper">
					<h3><?php the_sub_field('department_title'); ?></h3>
					<?php
					if( have_rows('people_list') ): while ( have_rows('people_list') ) : the_row(); ?>
					<p><?php the_sub_field('person_name'); ?> <a href="mailto:<?php the_sub_field('person_email'); ?>"><?php the_sub_field('person_email'); ?></a></p>
					<?php endwhile; endif; ?>
				</div>

				<?php endwhile; endif; ?>
			</div>
			
          
          <?php the_sub_field('event_details_onsite'); ?>
        </div>
        
		</div>
	
<?php endwhile; endif; ?>

<?php get_footer(); ?>