<?php
// Load parent theme styles
add_action('wp_enqueue_scripts', function () {
  $parent = 'astra-style';
  wp_enqueue_style($parent, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('hangula-child-style', get_stylesheet_uri(), [$parent], wp_get_theme()->get('Version'));
});

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
// Register Services CPT
function hangula_register_services_cpt() {
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Service',
        'menu_name' => 'Services',
        'name_admin_bar' => 'Service',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    );
    register_post_type('service', $args);
}
add_action('init', 'hangula_register_services_cpt');

