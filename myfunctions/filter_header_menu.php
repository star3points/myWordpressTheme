<?php

//header menu li class = 'nav-item'
function filter_for_nav_menu_css_classes($classes, $item, $args, $depth) {
    $new_classes = ['nav-item'];
    return $new_classes;
}
add_filter('nav_menu_css_class', 'filter_for_nav_menu_css_classes', 10, 4);

//header menu li id = ''
function filter_for_nav_menu_css_id($menu_id, $item, $args, $depth){
    return '';
}
add_filter('nav_menu_item_id', 'filter_for_nav_menu_css_id', 10, 4);

//header menu a class = nav link
function filter_for_nav_menu_links($atts, $item, $args, $depth){
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'filter_for_nav_menu_links', 10, 4);

?>