<?php

    /*
        Template Name: Accueil
    */

    // Header
    get_header();
?>
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
            <video controls width=100%>
                <source src="<?php the_field("video_hatha"); ?>" type="video/mp4">
            </video>
        </div>
    </article>
    <article class="presentation">
        <!--MEDITATION GUIDEE-->
            <!--VIDEO-->
            <div class="video">
            <video controls width=100%>
                <source src="<?php the_field("video_med"); ?>" type="video/mp4">
            </video>
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
        <?php if( have_rows( 'creneaux_cours' ) ): ?>
        <div class="creneaux_cours">
            <?php while ( have_rows( 'creneaux_cours' ) ) : the_row(); ?>
            <div class="contenu">
                <div class="name">
                    <h3><?php the_sub_field( 'name' );?></h3>
                </div>
                <div class="champ">
                    <i class="calendar"></i>
                    <p><?php the_sub_field( 'creneaux' ); ?></p>
                </div>
                <div class="champ">
                    <i class="schedule"></i>
                    <div class="bloc">
                        <p><?php the_sub_field( 'horaire' ); ?></p>
                        <p><?php the_sub_field( 'duree' ); ?></p>
                    </div>
                </div>
                <div class="champ">
                    <i class="location"></i>
                    <div class="bloc">
                        <p><?php the_sub_field( 'place' ); ?></p>
                        <a href="<?php the_sub_field( 'url_address' ); ?>" target="_blank"><?php the_sub_field( 'address' ); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <!--FIN GRID-->
        <img src=""/>
    </article>
    <article class="tarifs">
        <!--TARIFS-->
        <h2>Tarifs</h2>
        <p class="p">Pour toutes réservations, merci de me <a href="#">contacter.</a></p>
        <!--GRID-->
        <div class="creneaux_cours">
            <div class="prix">
                <div class="top">
                    <h3>Année</h3>
                    <p><?php the_field("note_year"); ?></p>
                    <p><?php the_field("price_year"); ?>€/an</p>
                </div>
                <div class="block">
                    <div>
                        <i class="calendar"></i>
                        <p><?php the_field("week"); ?> cours par semaine</p>
                    </div>
                    <div>
                        <i class="schedule"></i>
                        <p>créneau au choix</p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_supp"); ?>€ par cours supplémentaire</p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_part"); ?> € pour un cours particulier</p>
                    </div>
                </div>   
            </div>
            <div class="prix">
                <div class="top">
                    <h3>Trimestre</h3>
                    <p><?php the_field("note_tri"); ?></p>
                    <p><?php the_field("price_tri"); ?>€/semestre</p>
                </div>
                <div class="block">
                    <div>
                        <i class="calendar"></i>
                        <p><?php the_field("week"); ?> cours par semaine</p>
                    </div>
                    <div>
                        <i class="schedule"></i>
                        <p>créneau au choix</p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_supp"); ?> € par cours supplémentaire</p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_part"); ?> € pour un cours particulier</p>
                    </div>
                </div>
            </div>
            <div class="prix">
                <div class="top">
                    <h3>A l'unité</h3>
                    <p><?php the_field("note"); ?></p>
                    <p><?php the_field("price"); ?>€/cours</p>
                </div>
                <div class="block">
                    <div>
                        <i class="calendar"></i>
                        <p><?php the_field("week"); ?> cours par semaine</p>
                    </div>
                    <div>
                        <i class="schedule"></i>
                        <p>créneau au choix</p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_part"); ?> € pour un cours particulier</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            echo do_shortcode('[wpforms id="5" title="false"]');
        ?>
        <!--FIN GRID-->
    </article>
    <img src="../wp-content/themes/yogaterreciel/assets/images/footerHome.png" class="imgfoot">
</section>
<?php
    // Footer
    get_footer();

?>