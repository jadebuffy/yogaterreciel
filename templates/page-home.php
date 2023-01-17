<?php

    /*
        Template Name: Accueil
    */

    // Header
    get_header();

    // Image
    $image= get_field('imagefond');

?>
<div class="image">
    <img src="<?php echo($image["sizes"]["medium_large"]); ?>" 
        height="<?php echo($image["sizes"]["medium_large-height"]); ?>"
        width="<?php echo($image["sizes"]["medium_large-width"]); ?>"
        alt="<?php echo($image["alt"]) ?>" />
</div>
<section class="page-home">
    <!--INTRODUCTION-->
    <h2>Introduction au yoga</h2>

    <article class="presentation">
        <!--HA'THA Yoga-->
        <div class="desc">
            <div class="t">
                <h3><?php the_field("title"); ?></h3>
                <i class="icone"></i>
            </div>
            <div class="paragraphe">
                <p><?php the_field("texte_hatha"); ?></p>
            </div>
        </div>
        <!--VIDEO-->
        <div class="video">
            <iframe width="684" height="385" src="<?php the_field("video_hatha"); ?>" title="vidéo de présentation du HATHA Yoga" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </article>
    <article class="presentation">
        <!--MEDITATION GUIDEE-->
            <!--VIDEO-->
            <div class="video">
                <iframe width="684" height="385" src="<?php the_field("video_med"); ?>" title="vidéo de méditation" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <!--TEXTE-->
            <div class="desc">
                <div class="t">
                    <h3><?php the_field("title_med"); ?></h3>
                    <i class="icone"></i>
                </div>
                <div class="paragraphe">
                    <p><?php the_field("texte_med"); ?></p>
                    <a href=""><button class="bouton">Plus de méditations</button></a>
                </div>
            </div>
    </article>
    <article class="cours-images">
        <!--LE COURS EN IMAGE-->
        <h2>Les cours en image</h2>
        <!--slider-->
        <?php
            echo do_shortcode('[smartslider3 slider="2"]');
        ?>
        <a href=""><button class="bouton">Plus de photos</button></a>
        
    </article>
    <article class="creneaux">
        <!--CRENEAUX-->
        <h2>Lieux et horaires des cours</h2>
        <img src=""/>
        <!--GRID-->
        <div class="contenu">
            <h3>Hatha flow</h3>
            <div>
                <i class="calendar"></i>
                <p>Lundi matin</p>
            </div>
            <div>
                <i class="schedule"></i>
                <div class="bloc">
                    <p>8h30 - 10h</p>
                    <p>1h30 de cours</p>
                </div>
            </div>
            <div>
                <i class="location"></i>
                <div class="bloc">
                    <p>Espace Loreka</p>
                    <a href="">14 Rue de la Leysse,<br>
                    73000 Bassens</a>
                </div>
            </div>
        </div>
        <!--FIN GRID-->
        <img src=""/>
    </article>
    <article class="tarifs">
        <!--TARIFS-->
        <h2>Tarifs</h2>

        <p>Pour toutes réservations, merci de me contacter.</p>
        <!--GRID-->
        <div class="grid">
            <div class="prix">
                <div>
                    <h3>Année</h3>
                    <p><?php the_field("price_year"); ?>€/an</p>
                </div>
                <div>
                    <p><?php the_field("week"); ?> cours par semaine</p>
                    <p>créneau au choix</p>
                    <p><?php the_field("price_supp"); ?>€</p>
                    <p><?php the_field("price_part"); ?> €</p>
                </div>   
            </div>
            <div class="prix">
                <div>
                    <h3>Trimestre</h3>
                    <p><?php the_field("price_tri"); ?>€/semestre</p>
                </div>
                <div>
                    <p><?php the_field("week"); ?> cours par semaine</p>
                    <p>créneau au choix</p>
                    <p><?php the_field("price_supp"); ?> €</p>
                    <p><?php the_field("price_part"); ?> €</p>
                </div>
            </div>
            <div class="prix">
                <h3>A l'unité</h3>
                <p><?php the_field("price"); ?>€/cours</p>
                <p><?php the_field("week"); ?> cours par semaine</p>
                <p>créneau au choix</p>
                <p><?php the_field("price_supp"); ?> €</p>
                <p><?php the_field("price_part"); ?> €</p>
            </div>
        </div>
        <!--FIN GRID-->
    </article>
    <img src="../wp-content/themes/yogaterreciel/assets/images/footerHome.png" class="imgfoot">
</section>
<?php
    // Footer
    get_footer();

?>