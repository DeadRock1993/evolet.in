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
	return 12;
} );
remove_filter( 'the_excerpt', 'wpautop' ); 

function my_custom_style() {
    if(is_home()) {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    wp_register_script('fancybox.js', get_template_directory_uri() . '/js/fancybox.js','','', true);
    wp_enqueue_script('fancybox.js');
    wp_register_script('index.js', get_template_directory_uri() . '/js/index.js','','', true);
    wp_enqueue_script('index.js');
    wp_register_script('interactive_map_main', get_template_directory_uri() . '/components/interactive_map_main/script.js','','', true);
    wp_enqueue_script('interactive_map_main');
}
}
 add_action( 'wp_enqueue_scripts', 'my_custom_style' );

 function catalog_style() {
    if(is_page_template('catalog.php') || is_category()) {
    wp_enqueue_style( 'prodcts.css', get_template_directory_uri() . '/css/products.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    wp_register_script('products.js', get_template_directory_uri() . '/js/products.js','','', true);
    wp_enqueue_script('products.js');
    wp_register_script('product_slider', get_template_directory_uri() . '/components/product_slider/script.js','','', true);
    wp_enqueue_script('product_slider');
    wp_register_script('form.js', get_template_directory_uri() . '/js/form.js','','', true);
    wp_enqueue_script('form.js');
}
}
 add_action( 'wp_enqueue_scripts', 'catalog_style' );

 function about_style() {
    if(is_page_template('about.php')) {
    wp_enqueue_style( 'about.css', get_template_directory_uri() . '/css/about.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    wp_register_script('custom-scroll.js', get_template_directory_uri() . '/js/custom-scroll.js','','', true);
    wp_enqueue_script('custom-scroll.js');
    wp_register_script('about.js', get_template_directory_uri() . '/js/about.js','','', true);
    wp_enqueue_script('about.js');
    }
}
add_action( 'wp_enqueue_scripts', 'about_style' );

function activities_style() {
    if(is_page_template('activities.php')) {
    wp_enqueue_style( 'activities.css', get_template_directory_uri() . '/css/activities.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    }
}
add_action( 'wp_enqueue_scripts', 'activities_style' );

function partnership_style() {
    if(is_page_template('partnership.php')) {
    wp_enqueue_style( 'partners.css', get_template_directory_uri() . '/css/partners.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    wp_register_script('partners', get_template_directory_uri() . '/components/partners/script.js','','', true);
    wp_enqueue_script('partners');
    wp_register_script('form.js', get_template_directory_uri() . '/js/form.js','','', true);
    wp_enqueue_script('form.js');
    }
}

add_action( 'wp_enqueue_scripts', 'partnership_style' );
function career_style() {
    if(is_page_template('career.php')) {
    wp_enqueue_style( 'partners.css', get_template_directory_uri() . '/css/career.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    wp_register_script('career.js', get_template_directory_uri() . '/js/career.js','','', true);
    wp_enqueue_script('career.js');
    wp_register_script('form.js', get_template_directory_uri() . '/js/form.js','','', true);
    wp_enqueue_script('form.js');
}
}
add_action( 'wp_enqueue_scripts', 'career_style' );

function contact_style() {
    if(is_page_template('contacts.php')) {
    wp_enqueue_style( 'partners.css', get_template_directory_uri() . '/css/contacts.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    wp_register_script('contacts.js', get_template_directory_uri() . '/js/contacts.js','','', true);
    wp_enqueue_script('contacts.js');
    wp_register_script('interactive_map', get_template_directory_uri() . '/components/interactive_map/script.js','','', true);
    wp_enqueue_script('interactive_map');
    wp_register_script('form.js', get_template_directory_uri() . '/js/form.js','','', true);
    wp_enqueue_script('form.js');
}
}
add_action( 'wp_enqueue_scripts', 'contact_style' );

function single_style() {
    if(is_single()) {
    wp_enqueue_style( 'product.css', get_template_directory_uri() . '/css/product.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    wp_register_script('spritespin.js', get_template_directory_uri() . '/js/spritespin.js','','', true);
    wp_enqueue_script('spritespin.js');
    wp_register_script('product.js', get_template_directory_uri() . '/js/product.js','','', true);
    wp_enqueue_script('product.js');
    wp_register_script('slide.js', get_template_directory_uri() . '/components/product_slider/script.js','','', true);
    wp_enqueue_script('slide.js');
}
}
add_action( 'wp_enqueue_scripts', 'single_style' );
function page_style() {
    if(is_page()) {
    wp_enqueue_style( 'activities.css', get_template_directory_uri() . '/css/activities.css' );
    wp_enqueue_style( 'all.css', get_template_directory_uri() . '/css/all.css' );
    wp_register_script('main.js', get_template_directory_uri() . '/js/main.js','','', true);
    wp_enqueue_script('main.js');
    }
}
add_action( 'wp_enqueue_scripts', 'page_style' );

?>