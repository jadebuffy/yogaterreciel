<!DOCTYPE html>
<html lang="fr" class="pop">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png" alt="favicon"/>
    <title><?php echo(get_the_title()); ?></title>
    <?php wp_head(); ?>
</head>
<?php

    /*
        Template Name: Formulaire
    */
?>
<body>
    <header class="head">
        <nav role="navigation">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="Logo Yoga Terre-Ciel">
            <div class="nav-menu">
                <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
            </div>
        </nav>
    </header>
    <section class="page-form">
        <div class="formulaire">
            <h3>Je suis intéressé.e</h3>
            <p>
                Laissez moi vos coordonnées, et je vous recontacterais.
            </p>
            <?php
                echo do_shortcode('[wpforms id="5" title="false"]');
            ?>
        </div>
    </section>
<?php
    // Footer
    get_footer();

?>