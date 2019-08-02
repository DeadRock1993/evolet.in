<?php
add_theme_support( 'menus' );
register_nav_menu( 'menu', 'menuhead' );

add_theme_support( 'post-thumbnails' );

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            // Replace [YOUR THEME TEXT DOMAIN] below with the text domain of your theme (found in the theme's `style.css`).
            'label' => __( 'Secondary Image', '[YOUR THEME TEXT DOMAIN]'),
            'id' => 'secondary-image',
            'post_type' => 'post'
        )
    );
}
add_filter( 'excerpt_length', function(){
	return 20;
} );
remove_filter( 'the_excerpt', 'wpautop' ); 
?>