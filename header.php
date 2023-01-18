<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo(get_the_title()); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <?php
        // Image
        $image = get_field('imagefond');
    ?>
    <header class="head" style="background-image:url(<?php echo($image['url']); ?>); width: 100%; 
    height: 810px;
    box-sizing: border-box;
    background-repeat: no-repeat;
	background-size: cover; 
	background-position: center;">
        <nav role="navigation" class="nav-menu">
            <img src="../wp-content/themes/yogaterreciel/assets/images/logo.svg"/>
            <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
        </nav>
        <div class="titre">
            <h1>Yoga<br><p>Terre-Ciel</p></h1>
            <span>Chambéry</span>
        </div>
    </header>
    
