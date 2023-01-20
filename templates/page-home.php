<?php

    /*
        Template Name: Accueil
    */

    // Header
    get_header();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<section class="page-home">
    <!--INTRODUCTION-->
    <h2>Introduction au yoga</h2>

    <article class="presentation">
        <!--HA'THA Yoga-->
        <div class="desc">
            <div class="t">
                <h3><?php the_field("title"); ?></h3>
                <i class="icone-HATHA"></i>
            </div>
            <div class="paragraphe">
                <p><?php the_field("texte_hatha"); ?></p>
            </div>
        </div>
        <!--VIDEO-->
        <div class="video">
            <video controls width=100%>
                <source src="<?php the_field("video_hatha"); ?>" type="video/mp4" alt="vidéo de présentation par Deonne Parker">
            </video>
        </div>
    </article>
    <article class="presentation">
        <!--MEDITATION GUIDEE-->
            <!--VIDEO-->
            <?php if( get_field("video_med")) : ?>
                <div class="video">
                    <video controls width=100%>
                        <source src="<?php the_field("video_med"); ?>" type="video/mp4" alt="vidéo sur les méditations guidées">
                    </video>
                </div>
            <?php else: ?>
                <p class="else">Contenu disponible prochainement</p>
            <?php endif ?>
            <!--TEXTE-->
            <div class="desc">
                <div class="t">
                    <h3><?php the_field("title_med"); ?></h3>
                    <i class="icone-med"></i>
                </div>
                <div class="paragraphe">
                    <p><?php the_field("texte_med"); ?></p>
                    <a href="http://www.yoga-terre-ciel.com/creations/#meditation"><button class="bouton">Plus de méditations</button></a>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/illu1.jpg" class="illu1" alt="Illustration d'arbre à l'encre de Chine"/>
    </article>
    <article class="cours-images">
        <!--LE COURS EN IMAGE-->
        <h2>Quelques illustrations</h2>
        <!--SLIDER-->
        <div class="container">
        <?php if( have_rows( 'container' ) ):  ?>
                <div class="customer-logos slider">
                    <?php while ( have_rows( 'container' ) ) : the_row(); ?>
                    <?php $imagecrea = get_sub_field('images_illustrations'); ?>
                        <div class="slide"><img src="<?php echo($imagecrea); ?>" alt="Photos/illustrations des cours de yoga"></div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <!--FIN SLIDER-->
        <a href="http://www.yoga-terre-ciel.com/galerie/#photo"><button class="bouton">Plus de photos</button></a>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/illu2.jpg"  class="illu2" alt="illustration d'arbre à l'encre de chine"/>
    </article>
    <article class="creneaux">
        <!--CRENEAUX-->
        <h2>Lieux et horaires des cours</h2>
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
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bas.png" alt="série de 3 bonhommes peint à l'encre de Chine"/>
    </article>
    <article class="tarifs">
        <!--TARIFS-->
        <h2>Tarifs</h2>
        <p class="p">Pour toutes réservations, merci de me <a href="http://www.yoga-terre-ciel.com/contact/#contact">contacter.</a></p>
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
                        <p><?php the_field("price_year_week"); ?> cours par semaine</p>
                    </div>
                    <div>
                        <i class="schedule"></i>
                        <p><?php the_field("price_year_duree"); ?></p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_year_supp"); ?>€ par cours supplémentaire</p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_year_part"); ?> € pour un cours particulier</p>
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
                        <p><?php the_field("price_tri_week"); ?> cours par semaine</p>
                    </div>
                    <div>
                        <i class="schedule"></i>
                        <p><?php the_field("price_tri_duree"); ?></p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_tri_supp"); ?> € par cours supplémentaire</p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_tri_part"); ?> € pour un cours particulier</p>
                    </div>
                </div>
            </div>
            <div class="prix">
                <div class="top">
                    <h3>A l'unité</h3>
                    <p><?php the_field( 'note' ); ?></p>
                    <p><?php the_field("price"); ?>€/cours</p>
                </div>
                <div class="block">
                    <div>
                        <i class="calendar"></i>
                        <p><?php the_field("price_week"); ?> cours par semaine</p>
                    </div>
                    <div>
                        <i class="schedule"></i>
                        <p><?php the_field("price_duree"); ?></p>
                    </div>
                    <div>
                        <i class="money"></i>
                        <p><?php the_field("price_part"); ?> € pour un cours particulier</p>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN GRID-->
    </article>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footerHome.png" class="imgfoot" alt="série de 3 bonhommes peint à l'encre de Chine">
</section>
<script>
    $(window).bind("load", function() {
        setTimeout(() => {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '<button type="button" class="slick-prev"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrowleft.svg" alt="flèche à gauche"/></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrowright.svg" alt="flèche à droite"/></button>',
                arrows: true,
                dots: false,
                pauseOnHover: true,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        }, "10");
        
    });
</script>
<?php
    // Footer
    get_footer();

?>