<?php

    /*
        Template Name: Mention
    */

    // Header
    get_header();


?>

<section class="page-mention">
    <div class="image-container">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/line.png" class="back" alt="Example Image">
    </div>
    <p class="intro">Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 
        pour la confiance en l'économie numérique, il est précisé aux utilisateurs du site 
        Yoga Terre-Ciel l'identité des différents intervenants dans le cadre de sa réalisation 
        et de son suivi.
    </p>
    <div class="block1">
        <h3>Politique de protection des données à caratère personnel 
            <span class="arrow-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png" alt="arrow" class="arrow" id="arrow" onclick="showText()">
            </span>
        </h3>
        <p class="hidden" id="text"><em>Dernière mise à jour : le 18 Janvier 2023. </em><br><br>
        La présente Politique de confidentialité concerne les traitements de données à caractère personnel (ci-après « Données à Caractère Personnel ») dans le cadre de votre utilisation du site web, dénommée 
         « Yoga Terre-Ciel » (ci-après le« Site»),éditée par la Deonne Parker. Les Données à Caractère Personnel collectées sont traitées par Deonne Parker, ou pour son compte, dans les conditions définies
        ci-après.En tant que Responsable de traitement, Deonne Parker s’engage à mettre en œuvre des mesures adéquates pour assurer la protection, la confidentialité et la sécurité de vos Données à Caractère 
        Personnel et à traiter et utiliser de telles données dans le respect des dispositions applicables et notamment du Règlement Européen 2016/679 du 27 avril 2016 (ci-après le « RGPD ») et la loi n°78-17 
        du 6 janvier 1978 dite loi Informatique et Libertés et toute loi ou réglementation qui viendrait la compléter ou la substituer.</p>
    </div>
    
    <div class="line"></div>

    <div class="block2">
        <h3>Edition du site  
            <span class="arrow-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png" alt="arrow" class="arrow2" id="arrow2" onclick="showText2()"> 
            </span>
        </h3>
        <p class="hidden" id="text2"><em>Dernière mise à jour : le 18 Janvier 2023. </em><br><br>
          Le présent site, accessible à l’URL www.yogaterreciel.fr (le « Site »), est édité par :
          Anthony Mirota le chef de projet, Thisoa Dioudonnat la créatrice de contenus, Jade Buffy la développeuse web et Emilie Entwistle UI/UX designer, 
          dans le cadre du projet "semaine du web" en BUT métiers du multimédia et de l'internet à l'Université Savoie Mont-blanc. 
        </p>
    </div>
      
    <div class="line"></div>


    <div class="block2">
        <h3>Hébergement 
            <span class="arrow-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png" alt="arrow" class="arrow3" id="arrow3" onclick="showText3()">
            </span>
        </h3>
        <p class="hidden" id="text3"><em>Dernière mise à jour : le 18 Janvier 2023. </em><br><br>
        Le Site est hébergé par la société O2Switch, situé 222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand, (contact téléphonique ou email : (+33) 4 44 44 60 40)</p>
    </div>
      
    <div class="line"></div>



    <div class="block2">
        <h3>Directrice de publication 
            <span class="arrow-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png" alt="arrow" class="arrow4" id="arrow4" onclick="showText4()"> 
            </span>
        </h3>
        <p class="hidden" id="text4"><em>Dernière mise à jour : le 18 Janvier 2023. </em><br><br>
        La Directrice de la publication du Site est Deonne Parker.   
        </p>  
    </div>
      
    <div class="line"></div>

        
      <div class="block2">
        <h3>Nous contacter 
            <span class="arrow-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png" alt="arrow" class="arrow5" id="arrow5" onclick="showText5()">
            </span>
        </h3>
        <p class="hidden" id="text5"><em>Dernière mise à jour : le 18 Janvier 2023. </em><br><br>
          Par téléphone : 06 20 59 08 05 <br>
          Par email : yogaterreciel@gmail.com <br>
          Par courrier : (address) 
        </p>
     </div>
      
    <div class="line"></div>

    <!--JAVASCRIPT-->
    <script>
        function showText() {
            var x = document.getElementById("text");
            var arrow = document.getElementById("arrow");
            if (x.style.display === "none") {
            x.style.display = "block";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrowup.png";
            } else {
            x.style.display = "none";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png";
            }
        }

        function showText2() {
            var x = document.getElementById("text2");
            var arrow = document.getElementById("arrow2");
            if (x.style.display === "none") {
            x.style.display = "block";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrowup.png";
            } else {
            x.style.display = "none";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png";
            }
        }

        function showText3() {
            var x = document.getElementById("text3");
            var arrow = document.getElementById("arrow3");
            if (x.style.display === "none") {
            x.style.display = "block";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrowup.png";
            } else {
            x.style.display = "none";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png";
            }
        }

        function showText4() {
            var x = document.getElementById("text4");
            var arrow = document.getElementById("arrow4");
            if (x.style.display === "none") {
            x.style.display = "block";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrowup.png";
            } else {
            x.style.display = "none";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png";
            }
        }

        function showText5() {
            var x = document.getElementById("text5");
            var arrow = document.getElementById("arrow5");
            if (x.style.display === "none") {
            x.style.display = "block";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrowup.png";
            } else {
            x.style.display = "none";
            arrow.src = "<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow.png";
            }
        }
        
    </script>
</section>

<?php

    // Footer
    get_footer();
    
?>