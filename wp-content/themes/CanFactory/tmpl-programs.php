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
      <h2 id="factory">At the Can Factory</h2>
      <div class="program-wrapper">
        <h3>Changeling Concert Series</h3>
        <p><span class="italic-text">Lava + Boxcutter Collective + Robin Frohardt</span> | Thu <span
            class="bold-text">23 May 2019 </span> </p>
        <p>Doors 7:30p | Show 8p | Public $15/ Can Factory Workers $5 Cash Only </p>
        <p>RSVP to: <a href="mailto:info@brooklynlutherie.com?subject=RSVP">info@brooklynlutherie.com</a> </p>
      </div>
      <div class="program-wrapper">
        <h3>Ortega Y Gasset Gallery</h3>
        <p><span class="italic-text">Ghost Stories</span> | Entrance at 383 3rd Avenue | Closing <span
            class="bold-text">9 Jun 2019 </span> </p>
        <p>Info: <a
            href="https://xoprojects.us7.list-manage.com/track/click?u=231b310a4e13357274dd28a20&id=7d67592476&e=b85036c189"
            target="_blank">https://www.oygprojects.com/upcoming/</a> </p>
      </div>
      <div class="program-wrapper">
        <h3>SHARE</h3>
        <p>The Dining Room (D101) | <span class="bold-text">Every fourth Sunday</span> | Between <span
            class="bold-text">8p-12midnight </span> </p>
        <p>Info: <a
            href="https://xoprojects.us7.list-manage.com/track/click?u=231b310a4e13357274dd28a20&id=ed9c631198&e=b85036c189"
            target="_blank">http://share.dj/share/ </a> </p>
      </div>
      <h2 id="offsite" style="margin-top: 1.1em;">Tenants events off site</h2>
      <div class="program-wrapper">
        <h3>Nancy Manter </h3>
        <p><span class="text-italic">As Above, So Below </span>| 165 Second Street, Brooklyn</p>
        <p><span class="bold-text">An Exhibition at the Gowanus Dredgers Boathouse</span> | thru <span
            class="bold-text">15 Jun, 2019</span> </p>
        <p>Info: <a
            href="https://xoprojects.us7.list-manage.com/track/click?u=231b310a4e13357274dd28a20&id=3d88e89721&e=b85036c189"
            target="_blank">http://www.nancymanter.com/ </a> </p>
      </div>
      <div class="program-wrapper">
        <h3>Ugly Duckling Presse</h3>
        <p>Info: <a
            href="https://xoprojects.us7.list-manage.com/track/click?u=231b310a4e13357274dd28a20&id=9689982da4&e=b85036c189"
            target="_blank">Ugly Duckling Presse</a> </p>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>

  <?php get_footer(); ?>