<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php
        // Image
        $image = get_field('imagefond');
    ?>
    <header class="head" style="background-image:url(<?php echo($image['url']); ?>);">
        <nav role="navigation" class="nav-menu">
            <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
        </nav>
        <div class="titre">
            <h1>Yoga<br><p>Terre-Ciel</p></h1>
            <span>Chambéry</span>
        </div>
    </header>
    
