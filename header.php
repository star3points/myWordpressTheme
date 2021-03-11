<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <title>My pet blog</title> -->
    <title><?php the_title(); ?></title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="/application/styles/template.css"> -->
    <!-- <base href="http://mypetblog.h1n.ru/"> ??? -->
    <!--  wp_enqueue_style() in functions , css styles, js scripts, wp styles and scripts, wp admin tool bar: -->
    <?php wp_head();?> 
</head>

<body>
<header id = headerNavBar>
<div id = "header">
    <nav class = "navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class = 'navbar-brand'>My logo </a>
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