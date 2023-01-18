<?php

    /*
        Template Name: bijoux
    */

    // Header
    get_header();

?>

<section class="page-jewerlies1">
    <h2>Outils de méditations et Yoga</h2>
    <article>
        <div class="t">
            <h3>Cartes et runes</h3>
            <i class="icone-cartes"></i>
        </div>
        <!--SLIDER-->
    </article>
    <article div="cours">
        <div class="video">
            <video controls width=100%>
                <source src="<?php the_field("video_med"); ?>" type="video/mp4">
            </video>
        </div>
        <div class="desc">
            <div class="t">
                <h3><?php the_field("title"); ?></h3>
                <i class="icone-meditation"></i>
            </div>
            <div class="paragraphe">
                <p><?php the_field("description"); ?></p>
                <a href=""><button class="bouton">Je suis intéressé.e</button></a>
            </div>
        </div>
    </article>
</section>
<section class="page-jewerlies2">
    <h2>Les bijoux</h2>
    <article>
        <p><?php the_field("texte_bijoux"); ?></p>
        <!--SLIDER-->
    </article>
    <img src="../wp-content/themes/yogaterreciel/assets/images/footerJewerlies.png" class="imgfoot"/>
</section>


<?php
    // Footer
    get_footer();

?>