<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<?php
    wp_get_archives('type=monthly&format=link');
    wp_head();
  ?>
</head>

<body>
<div class="container">
    <div id="header" class="headlink">
      <?php
        // see this theme's functions.php
        print do_heading();
      ?>
    </div>
	<?php 
        wp_head();
	?>
	<div class="nav">
	<?php wp_nav_menu(array('theme_location' => 'primary'));
	?>
	</div>
	<div id="canvas">