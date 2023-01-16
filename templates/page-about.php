<?php

    /*
        Template Name: About
    */

    // Header
    get_header();

    // Image
    $image= get_field('images');

?>
<section class="about">
    <!--REMERCIEMENT-->
    <article>
        <!--TEXTE-->
        <div class="desc">
            <!--TITRE-->
            <h2 class="titre1">Passion Yoga</h2>
            <!--PARAGRAPHE-->
            <div class="paragraphe">
                <span>
                    <h3>"The ancient wisdom of Yoga teaches that Life is already given to you, 
                        you are completely loved, you are here now. It teaches that we are not 
                        separate—cannot be separate—from Nature, which sustains us in a vast 
                        interdependence with everything." </h3>
                    <i class="iconePY"></i>
                </span>
                <p>Je dédie cette site à la personne qui m'a plus influencé, motivé et aider à 
                    comprendre profondément ce qu’est le Yoga: mon professeur, <a href="https://www.heartofyoga.com/">Mark Whitwell</a>. 
                    Je lui suis reconnaissante ainsi qu’à ses enseignants, <a href="https://en.wikipedia.org/wiki/T._K._V._Desikachar">T.K.V Desikachar</a> et 
                    son père, <a href="https://blog.green-yoga.fr/krishnamacharya-pere-yoga-moderne/">Krishnamacharya</a>.</p>
            </div>
        </div>

        <!--PHOTO-->
        <div class="photo">
            <img src="../wp-content/themes/yogaterreciel/assets/images/MW.jpg"/>
            <p>Mark Whitwell.</p>
        </div>
    </article>

    <!--A PROPOS-->
    <article>
        <!--PHOTO-->
        <div class="photo">
            <img src="../wp-content/themes/yogaterreciel/assets/images/DP.jpg"/>
        </div>
        <!--TEXTE-->
        <div class="desc">
            <!--TITRE-->
            <h2 class="titre2">Deonne Parker</h2>
            <!--PARAGRAPHE-->
            <div class="paragraphe">
                <span>
                    <h3>“On adapte le yoga à la personne, et pas la personne au yoga”</h3>
                    <i class="iconeDP"></i>
                </span>
                <p>Canadienne et maman de deux filles, je suis professeur d’hatha-yoga 
                    et de méditation depuis 2008 à Chambéry et ses alentours.</p>
                <p>M’étant apparu comme une révélation lorsque je le pratiquais en 
                    complément du patinage artistique, j’ai continué de pratiquer 
                    l’hatha yoga tout au long de mes études. Considérant le yoga 
                    comme une partie de moi, je me suis alors naturellement dirigé vers
                    l’enseignement afin de vous transmettre cette passion.</p>
            </div>
        </div>
    </article>
    <img src="../wp-content/themes/yogaterreciel/assets/images/footerAbout.png" class="imgfoot" alt="serie de postures de yoga "/>
</section>
<?php

    // Footer
    get_footer();
    
?>