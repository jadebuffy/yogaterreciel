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
<body>
    <header class="head">
        <nav role="navigation">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo Yoga Terre-Ciel">
            <div class="nav-menu">
                <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
            </div>
        </nav>
    </header>
    <section class="error">
        <article>
            <h1>Oops</h1>
            <p>Il semblerait que vous soyez perdu...</p>
            <p>Vérifiez que l'URL saisie ne contient pas d'erreur.</p>
        </article>
        <article>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/giphy.gif" alt="gif panda qui dort" />
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/404.svg" alt="404"/>
        </article>
    </section>
<?php
    // Footer
    get_footer(); 
?>

