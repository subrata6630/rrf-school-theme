<?php

include_once('inc/custom-posts.php');
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'inc/option-tree/ot-loader.php' );


// Calling Theme files
function rrf_education_theme_files(){

    wp_enqueue_style( 'rrf-education-theme-googlefont', '//fonts.googleapis.com/css?family=Hind+Siliguri:400,300,500,600,700&subset=bengali,latin', array(), '3.3.4' );
    wp_enqueue_style( 'rrf-education-theme-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', array(), '3.3.4' );
    wp_enqueue_style( 'rrf-education-theme-icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-remodal', get_template_directory_uri() . '/css/remodal.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-calendar', get_template_directory_uri() . '/css/fullcalendar.min.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-owl', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-style', get_stylesheet_uri() );

    wp_enqueue_style( 'rrf-education-theme-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0' );
    wp_enqueue_style( 'rrf-education-theme-custom', get_template_directory_uri() . '/inc/custom-css.php', array(), '1.0' );

    wp_enqueue_script( 'rrf-education-theme-moment-js', get_template_directory_uri() . '/js/moment.min.js', array(), '20120206', false );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'rrf-education-theme-bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '20120206', true );
    wp_enqueue_script( 'rrf-education-theme-slicknav-js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array(), '20120206', true );
    wp_enqueue_script( 'rrf-education-theme-remodal-js', get_template_directory_uri() . '/js/remodal.min.js', array(), '20120206', false );
    wp_enqueue_script( 'rrf-education-theme-calendar-js', get_template_directory_uri() . '/js/fullcalendar.min.js', array(), '20120206', false );

    wp_enqueue_script( 'rrf-education-theme-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20120206', true );
    wp_enqueue_script( 'rrf-education-theme-owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20120206', true );
    wp_enqueue_script( 'rrf-education-theme-infinite-scroll-js', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array(), '20120206', true );
    wp_enqueue_script( 'rrf-education-theme-parallax-js', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '20120206', true );
    wp_enqueue_script( 'rrf-education-theme-main-js', get_template_directory_uri() . '/js/main.js', array(), '20120206', true );




    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'rrf_education_theme_files'); 

function rrf_education_ie_compitable_elements(){
    ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php
}
add_action('wp_head', 'rrf_education_ie_compitable_elements');

add_filter('widget_text', 'do_shortcode');


function rrfedutheme_add_mce_button() {
    if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
        return;
    }
    if ( 'true' == get_user_option( 'rich_editing' ) ) {
        add_filter( 'mce_external_plugins', 'rrfedutheme_add_tinymce_plugin' );
        add_filter( 'mce_buttons', 'rrfedutheme_register_mce_button' );
    }
}
add_action('admin_head', 'rrfedutheme_add_mce_button');

function rrfedutheme_add_tinymce_plugin( $plugin_array ) {
    $plugin_array['rrfedutheme_mce_button'] = get_template_directory_uri() .'/js/rrfedutheme-mce-button.js';
    return $plugin_array;
}

function rrfedutheme_register_mce_button( $buttons ) {
    array_push( $buttons, 'rrfedutheme_mce_button' );
    return $buttons;
} 

// PPM Quickstart theme supports
if ( ! function_exists( 'rrf_education_theme_supports' ) ) :
function rrf_education_theme_supports(){

    load_theme_textdomain( 'rrf-education-theme', get_template_directory() . '/languages' );

    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-image', 400, 400, true );

    register_nav_menus( array(
        'primary'   => __( 'মূল মেনু‍্য', 'rrf-education-theme' ), 
    ) );  

    if(ot_get_option('select_footer_style') == '2') {
        register_nav_menus( array(
            'footer-menu'   => __( 'ফুটার মেনু‍্য', 'rrf-education-theme' ), 
        ) );     
    }
}
endif;
add_action('after_setup_theme', 'rrf_education_theme_supports');    


// Includes
include_once('inc/widgets.php');
include_once('inc/shortcodes.php');
include_once('inc/theme-options.php');
include_once('inc/meta-boxes.php');

add_shortcode('mb_last_modified', 'mb_last_modified_func');

function mb_last_modified_func($atts) {
    global $wpdb;
    $last_modified = $wpdb->get_var("SELECT MAX($wpdb->posts.post_modified) FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish'");
    return date(get_option("date_format") . " " . get_option("time_format"), strtotime($last_modified));
} 