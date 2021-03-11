<?php

function template_for_subcategory_notes($template){
    if (cat_is_ancestor_of(4, get_query_var('cat'))){
        //$new_template = get_template_directory_uri().'/subcategory-notes.php';
        //echo $new_template;
        $new_template = locate_template('subcategory-notes.php');
        return $new_template;
    }

    return $template;

}

add_filter('template_include', 'template_for_subcategory_notes');

?>