<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="head">
        <nav role="navigation">
            <ul class="nav-menu">
                <li><img src="<?php echo(get_template_directory_uri())?>/assets/images/logo.svg"/></li>
                <a href="http://localhost/wordpress/home/"><li>Cours de Yoga</li></a>
                <a href="http://localhost/wordpress/a-propos/"><li>À propos</li></a>
                <a href="http://localhost/wordpress/galerie/"><li>Galerie</li></a>
                <a href="http://localhost/wordpress/creations/"><li>Mes créations</li></a>
                <a href="http://localhost/wordpress/contact/"><li>Contact</li></a>
            </ul>
        </nav>
        <div class="titre">
            <h1>Yoga<br><p>Terre-Ciel</p></h1>
            <span>Chambéry</span>
        </div>
    </header>
    
