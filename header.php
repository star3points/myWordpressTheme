<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php single_term_title() ?></title>
    <!--  wp_enqueue_style() in functions , css styles, js scripts, wp styles and scripts, wp admin tool bar: -->
    <?php wp_head();?> 
</head>

<body>
<header id = headerNavBar>
<div id = "header">
    <nav class = "navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class = 'navbar-brand' href = "/">My logo </a>
        <!-- <ul class = "navbar-nav"> -->
            <?php wp_nav_menu(['theme_location' => 'header',
            'menu_class' => 'navbar-nav',
            'container' => 'ul']);?>
            <!-- <li class = 'nav-item'>
                <a class = 'nav-link' href ='/mindflow' >mindflow</a>
            </li>

            <li class = "nav-item">
                <a class = "nav-link" href ="/art">art</a>
            </li>

            <li class = "nav-item">
                <a class = "nav-link" href ="/notes">notes</a>
            </li>

            <li class = "nav-item">
                <a class = "nav-link" href ="/about">about</a>
            </li> -->

        <!-- </ul> -->
    </nav>
</div>
</header>
<!-- <div id = "content"> -->