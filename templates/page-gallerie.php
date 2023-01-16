<?php

    /*
        Template Name: Galerie
    */

    // Header
    get_header();

    // Image
    $image= get_field('images');

?>
<section class="page-gallerie">
    <h2>Un aperçu</h2>
    <article>
        <div class="t">
            <h3>Photos</h3>
            <i class="icone-photo"></i>
        </div>
        <!--GALERIE-->
    </article>
    <article>
        <div class="t">
            <h3>Vidéos</h3>
            <i class="icone-video"></i>
        </div>
        <!--GALERIE-->
    </article>
    <img src="../wp-content/themes/yogaterreciel/assets/images/footerGallerie.png" class="imgfoot">
</section>   
    

<?php

    // Footer
    get_footer();
    
?>