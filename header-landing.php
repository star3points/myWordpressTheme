<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php single_term_title() ?></title>
    <!--  wp_enqueue_style() in functions , css styles, js scripts, wp styles and scripts, wp admin tool bar: -->
    <?php wp_head();?> 
</head>

<body>