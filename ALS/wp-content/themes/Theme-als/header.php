<!doctype html>

<html <?php language_attributes(); ?> >

<head>
    
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" >
    <title>
		<?php bloginfo('name'); ?>
		<?php if(is_home() || is_front_page()) : ?>
			&mdash; <?php bloginfo('description'); ?>
			<?php else : ?>
			&mdash; <?php wp_title("",true); ?>
		<?php endif; ?>
	</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
    <?php wp_head(); ?>
    
</head>


<body <?php body_class(); ?>>


<header id="entete">
        <div id="logo">
        <a href="<?php bloginfo('url')?>"> <img src="http://localhost:8888/ALS/wp-content/uploads/2016/11/ALS-logo-couleur-23.png" alt="logo_als"> </a>
        </div>

		<!-- Menu "principal" actif -->
		<?php if ( has_nav_menu( 'principal' ) ) : ?>
		<nav id="menu">
			<?php wp_nav_menu( array('theme_location'=>'principal')); ?>
		</nav>
		<?php endif; ?>
		
</header> 


	<div id="contenu">
