<!doctype html>
<html lang="en-US" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns="http://www.w3.org/TR/REC-html40">

<head>
  <title>
    <?php
			wp_title();
		?>
	</title>
  <meta charset="utf-8 iso-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="The Old American Can Factory is an historic, six-building, 130,000 sq ft industrial complex on the Gowanus Canal in Brooklyn.">
  <meta name="keywords" content="xo projects, the old american can factory"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FAVICON -->
  <link rel="manifest" href="/manifest.json">
  
  <!-- STYLE -->

  <!-- FONTS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500" rel="stylesheet">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.14.2/dist/bootstrap-table.min.css">
  <!-- CUSTOM -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/stylesheet/mainstyle.css">
    
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="header">
    <div class="logo-wrapper"><img src="<?php bloginfo('template_url'); ?>/oac_logo.jpg" alt="The Old American Can Factory Logo" style="display: block;"></div>
    <div class="menu-wrapper">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'main-menu',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'menu',
          'fallback_cb' => 'wp_page_menu')
        );
      ?>
  