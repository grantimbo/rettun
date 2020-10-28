<!doctype html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>Rettun LLC | Online Retailer</title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" type="image/x-icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

<header class="head bg-white">
    <button class="menu-toggle" onclick="toggleMenu()">
        <i class="fas fa-bars"></i>
    </button>
    
    <a href="<?php echo get_bloginfo('wpurl'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo"></a>

    <div class="tae">
        <nav class="menu-nav">
            <li><a href="<?php echo get_bloginfo('wpurl'); ?>">Home</a></li>
            <li><a href="<?php echo get_bloginfo('wpurl'); ?>/about">About</a></li>
            <li><a href="<?php echo get_bloginfo('wpurl'); ?>/legal">Legal</a></li>
        </nav>
        <div class="menu-shadow" onclick="toggleMenu()"></div>
    </div>
</header>