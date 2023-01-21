<?php

    /*
        Template Name: About
    */

    // Header
    get_header();

    // Image
    $image= get_field('image_py');
    $image2= get_field('image_dp');

    //Citation
    $quote= get_field('citation_py');
    $quote2= get_field('citation_dp');

    //Auteur citation
    $auteur = get_field('auteur_cit_py');
    $auteur2 = get_field('auteur_cit_bio');

    //Texte
    $text= get_field('texte_py');
    $text2= get_field('texte_dp');

?>
<section class="page-about">
    <!--REMERCIEMENT-->
    <article>
        <!--TEXTE-->
        <div class="desc">
            <!--TITRE-->
            <h2 class="titre1">Passion Yoga</h2>
            <!--PARAGRAPHE-->
            <div class="paragraphe">
                <span>
                    <h3><?php echo($quote);?></h3>
                    <i class="iconePY"></i>
                    <h4><?php echo ($auteur);?></h4>
                </span>
                <p><?php echo($text);?></p>
            </div>
        </div>

        <!--PHOTO-->
        <div class="photo">
            <img src="<?php echo($image["sizes"]["medium_large"]); ?>" 
                height="<?php echo($image["sizes"]["medium_large-height"]); ?>"
                width="<?php echo($image["sizes"]["medium_large-width"]); ?>"
                alt="<?php echo($image["alt"]) ?>" loading="lazy"/>
            <p><?php the_field("legende");?></p>
        </div>
    </article>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/illu3.jpg"  class="illu3" alt="Illustration d'arbre à l'encre de Chine"/>
    <!--A PROPOS-->
    <article>
        <!--PHOTO-->
        <div class="photo">
            <img src="<?php echo($image2["sizes"]["medium_large"]); ?>" 
                    height="<?php echo($image2["sizes"]["medium_large-height"]); ?>"
                    width="<?php echo($image2["sizes"]["medium_large-width"]); ?>"
                    alt="<?php echo($image2["alt"]) ?>" loading="lazy"/>
        </div>
        <!--TEXTE-->
        <div class="desc">
            <!--TITRE-->
            <h2 class="titre2">Deonne Parker</h2>
            <!--PARAGRAPHE-->
            <div class="paragraphe">
                <span>
                    <h3><?php echo($quote2);?></h3>
                    <i class="iconeDP"></i>
                    <h4><?php echo ($auteur2);?></h4>
                </span>
                <p><?php echo($text2);?></p>
            </div>
        </div>
    </article>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footerAbout.png" class="imgfoot" alt="serie de postures de yoga " loading="lazy"/>
</section>
<?php

    // Footer
    get_footer();
    
?>