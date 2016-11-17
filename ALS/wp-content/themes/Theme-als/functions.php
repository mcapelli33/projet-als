<?php

//function custom_scripts_styles(){
//    wp_enqueue_style(
//    'default-style',
//    get_template_directory_uri().'main.css',
//    false,
//    false,
//    'all'  
//    );
//    
//    wp_enqueue_style(
//    'default-style',
//    get_template_directory_uri().'services.css',
//    false,
//    false,
//    'all'  
//    );
//}

/* Création des emplacements des menus */
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'principal' => 'Menu principal',
			'secondaire' => 'Menu secondaire'
			)
		);
}


/* Ajout des formats d'article */
add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'quote', 'link', 'gallery',
	'status', 'audio', 'chat'
) );

//empêcher l'éditeur wysiwyg d'ajouter des balises <p> et <br> :
//sur les fichiers 'content'
remove_filter( 'the_content', 'wpautop' );
//sur les fichiers 'exerpt'
remove_filter( 'the_excerpt', 'wpautop' );

//empêche la conversion des certaines entités texte en entités HTML
remove_filter( ‘the_content’, ‘wptexturize’);


?>