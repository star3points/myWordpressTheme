<?php 
function mytheme_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');

    //wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js');

    wp_enqueue_style('mycss', get_template_directory_uri(). '/css/mycss.css');

    wp_enqueue_script('target_for_links', get_template_directory_uri() . '/js/add_target_for_links.js');
    wp_enqueue_script('validate_note_form', get_template_directory_uri() . '/js/validate_note_form.js');
    wp_enqueue_script('landing', get_template_directory_uri() . '/js/landing.js');
}

add_action('wp_enqueue_scripts', 'mytheme_scripts');

function reg_menu(){
    register_nav_menu('header', 'header menu');
    //register_nav_menu('header-landing', 'header landing menu');
}

add_action('after_setup_theme', 'reg_menu');

function reg_sidebar(){
    register_sidebar([
        'name' => 'sidebar_notes_tags',
        'id' => 'sidebar_notes_tags_id',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
	    'after_title'   => '</h5>' 
    ]);
}

add_action('widgets_init', 'reg_sidebar');

require('myfunctions/filter_header_menu.php');

require('myfunctions/include_template_subcategory_notes.php');

require('myfunctions/add_note.php');

//update note page after add_note
require('myfunctions/notes_get_posts.php');

?>