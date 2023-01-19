<?php

    /*
        Template Name: bijoux
    */

    // Header
    get_header();

    //Image 
    
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<section class="page-jewerlies1">
    <h2>Outils de méditations et Yoga</h2>
    <article>
        <div class="t">
            <h3>Cartes et runes</h3>
            <i class="icone-cartes"></i>
        </div>
        <!--SLIDER-->
        <div class="container">
        <?php if( have_rows( 'container' ) ):  ?>
                <div class="customer-logos slider">
                    <?php while ( have_rows( 'container' ) ) : the_row(); ?>
                    <?php $imagecrea = get_sub_field('imagescrea'); ?>
                        <div class="slide"><img src="<?php echo($imagecrea); ?>"></div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <!--FIN SLIDER-->
    </article>
    <article class="med" id="meditation">
        <?php if (get_field('video_med')) : ?>
            <div class="video">
                <video controls width=100%>
                    <source src="<?php the_field("video_med"); ?>" type="video/mp4">
                </video>
            </div>
        <?php else: ?>
            <p class="else">Contenu disponible prochainement</p>
        <?php endif ?>
        <div class="desc">
            <div class="t">
                <h3><?php the_field("title"); ?></h3>
                <i class="icone-meditation"></i>
            </div>
            <div class="paragraphe">
                <p><?php the_field("description"); ?></p>
                <a href="http://www.yoga-terre-ciel.com/formulaire"><button class="bouton">Je suis intéressé.e</button></a>
            </div>
        </div>
    </article>
</section>
<section class="page-jewerlies2">
    <h2>Les bijoux</h2>
    <article>
        
        <p><?php the_field("texte_bijoux"); ?></p>

        <!--SLIDER-->
        <div class="container">
        <?php if( have_rows( 'containerb' ) ):  ?>
                <div class="customer-logos slider">
                    <?php while ( have_rows( 'containerb' ) ) : the_row(); ?>
                    <?php $imagecrea = get_sub_field('images_bijoux'); ?>
                        <div class="slide"><img src="<?php echo($imagecrea); ?>"></div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <!--FIN SLIDER-->

    </article>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footerJewerlies.png" class="imgfoot"/>
</section>

<script>
    $(window).bind("load", function() {
        setTimeout(() => {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                prevArrow: '<button type="button" class="slick-prev"><img src="../wp-content/themes/yogaterreciel/assets/images/arrowleft.svg"/></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="../wp-content/themes/yogaterreciel/assets/images/arrowright.svg"/></button>',
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