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
                <h3>HA'THA</h3>
                <i class="icone"></i>
            </div>
            <div class="paragraphe">
                <p>“Ha” signifie soleil, “tha” signifie la “lune” et “yoga” signifie lier. 
                    L’Hatha Yoga signifie l'union du soleil et de la lune.
                    En liant le souffle, la conscience et le corps entier, vous participer dans 
                    les polarités de votre propre système :  soleil-lune , droite-gauche, le haut 
                    et le bas, et les aspects masculin- féminin qui existent dans chacun de nous 
                    et dans le monde autour.</p>
            </div>
        </div>
        <!--VIDEO-->
        <div class="video">
            <iframe width="684" height="385" src="https://www.youtube.com/embed/52nfjRzIaj8?list=RDGMEMQ1dJ7wXfLlqCjwV0xfSNbAVMaGSKrC7dGcY" title="I'll Never Love Again (from A Star Is Born) (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </article>
    <article class="presentation">
        <!--MEDITATION GUIDEE-->
            <!--VIDEO-->
            <div class="video">
                <iframe width="684" height="385" src="https://www.youtube.com/embed/52nfjRzIaj8?list=RDGMEMQ1dJ7wXfLlqCjwV0xfSNbAVMaGSKrC7dGcY" title="I'll Never Love Again (from A Star Is Born) (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <!--TEXTE-->
            <div class="desc">
                <div class="t">
                    <h3>Méditation guidée</h3>
                    <i class="icone"></i>
                </div>
                <div class="paragraphe">
                    <p>La méditation est un outil permettant de développer une connaissance 
                        subtile de notre corps. L’état méditatif est un cadeau. On ne le
                         cherche pas, il vient naturellement. La méditation guidée est un 
                         outil d’apprentissage privilégié que j’utilise dans mes cours de yoga.</p>
                    <p>J’anime également des séances dédiées à la méditation et à son intégration dans le quotidien.</p>
                    <a href=""><button class="bouton">Plus de méditations</button></a>
                </div>
            </div>
    </article>
    <article class="cours-images">
        <!--LE COURS EN IMAGE-->
        <h2>Les cours en image</h2>
        <!--slider-->
        <a href=""><button class="bouton">Plus de photos</button></a>
        
    </article>
    <article class="creneaux">
        <!--CRENEAUX-->
        <h2>Lieux et horaires des cours</h2>
        <img src=""/>
        <!--GRID-->
        <div>
            <h3>Hatha flow</h3>
            <div>
                <i class="calendar"></i>
                <p>Lundi matin</p>
            </div>
            <div>
                <i class="schedule"></i>
                <p>8h30 - 10h</p>
                <p>1h30 de cours</p>
            </div>
            <div>
                <i class="location"></i>
                <p>Espace Loreka</p>
                <a href="">14 Rue de la Leysse,<br>
                    73000 Bassens</a>
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
        <div class="prix">
            <p>A l'année <?php the_field("price_year"); ?>€</p>
            <p><?php the_field("week"); ?> cours par semaine</p>
            <p><?php the_field("price_supp"); ?>€</p>
            <p><?php the_field("price_part"); ?> €</p>
        </div>
        <div class="prix">
            <p>Par trimestre <?php the_field("price_tri"); ?>€</p>
            <p><?php the_field("week"); ?> cours par semaine</p>
            <p><?php the_field("price_supp"); ?> €</p>
            <p><?php the_field("price_part"); ?> €</p>
        </div>
        <div class="prix">
            <p>A l'unité <?php the_field("price"); ?>€</p>
            <p><?php the_field("week"); ?> cours par semaine</p>
            <p><?php the_field("price_supp"); ?> €</p>
            <p><?php the_field("price_part"); ?> €</p>
        </div>
        <!--FIN GRID-->
        <img src=""/>
    </article>
</section>
<?php
    // Footer
    get_footer();

?>