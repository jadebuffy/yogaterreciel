<?php

    /*
        Template Name: Contact
    */

    // Header
    get_header();

    // Image
    $image= get_field('images');

?>
<section class="page-contact">
    <h2>Me contacter</h2>
    <article>
        <div class="photo">
            <img src="../wp-content/themes/yogaterreciel/assets/images/contact.jpg">
        </div>
        <div class="desc">
            <div class="title">
                <div class="t">
                    <h3>Deonne Parker</h3>
                    <i class="icone-contact"></i>
                </div>
                <div>
                    <span>
                        <a href="tel:+33620590805"><i class="tel"></i>06 20 59 08 05</a>
                    </span>
                    <span>
                        <a href="mailto:deonne.parker@gmail.com"><i class="mail"></i>deonne.parker@gmail.com</a>
                    </span>
                </div>
            </div>
            <div>
                <h3>Retrouvez moi sur :</h3>
                <div>
                    <span>
                        <a href=""><i class="fb"></i>Yoga Terre-Ciel</a>
                    </span>
                    <span>
                        <a href=""><i class="insta"></i>Yoga Terre-Ciel</a>
                    </span>
                    <span>
                        <a href=""><i class="etsy"></i>Yoga Terre-Ciel</a>
                    </span>
                </div>
            </div>
        </div>
    </article>
    <img src="../wp-content/themes/yogaterreciel/assets/images/footerContact.png" class="imgfoot">
</section>

<?php

    // Footer
    get_footer();
    
?>