<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon.svg" alt="favicon"/>
    <title><?php echo(get_the_title()); ?> - Yoga Terre-Ciel</title>
    <?php wp_head(); ?>
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
            background: white; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #CAB0AC; 
            border-radius: 3px;
        }
        
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #9C7973; 
        }
  </style>
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
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav role="navigation">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="Logo Yoga Terre-Ciel">
            <div class="nav-menu">
                <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
            </div>
        </nav>
        <div class="titre">
            <h1>Yoga<br><p>Terre-Ciel</p></h1>
            <span>Chambéry</span>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arroowdown.png" alt="flèche vers le bas" class="down">
    </header>
    
