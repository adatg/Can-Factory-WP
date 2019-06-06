<?php

/*
	Template Name: Alumni
*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<ul class="directory">
        <li><a href="https://thecanfactory.org/alumni/">Advisors</a></li>
        <li><a href="https://thecanfactory.org/people/">Current
        Tenants</a></li>
        <li><a href="https://thecanfactory.org/alumni/">Alumni Tenants</a></li>
</ul>

    <div class="container_custom" id='waypoint-trigger'>
        <div class="wrapper">
            <p style="font-style: italic">Coming soon...</p>
            <?php endwhile; endif; ?>

            <?php get_footer(); ?>