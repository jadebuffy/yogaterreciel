<?php

    /*
        Template Name: Contact
    */

    // Header
    get_header();

    // Image
    $image= get_field('image_contact');

    //Telephone
    $tel= get_field('num');
    $mail= get_field('mail');

?>
<section class="page-contact" id="contact">
    <h2>Me contacter</h2>
    <article>
        <div class="photo">
            <img src="<?php echo($image["sizes"]["medium_large"]); ?>" 
                    height="<?php echo($image["sizes"]["medium_large-height"]); ?>"
                    width="<?php echo($image["sizes"]["medium_large-width"]); ?>"
                    alt="<?php echo($image["alt"]) ?>"/>
        </div>
        <div class="desc">
            <div class="title">
                <div class="ti">
                    <h3>Deonne Parker</h3>
                    <i class="icone-contact"></i>
                </div>
                <div>
                    <span>
                        <a href="tel:+33620590805"><i class="tel"></i><?php echo($tel);?></a>
                    </span>
                    <span>
                        <a href="mailto:<?php the_field( 'mail' ); ?>"><i class="mail"></i><?php echo($mail);?></a>
                    </span>
                </div>
            </div>
            <div>
                <h3>Retrouvez moi sur :</h3>
                <div>
                    <span>
                        <a href="<?php the_field('fb_url'); ?>" target="_blank"><i class="fb"></i><?php the_field("facebook"); ?></a>
                    </span>
                    <span>
                        <a href="<?php the_field('insta_url'); ?>" target="_blank"><i class="insta"></i><?php the_field("instagram"); ?></a>
                    </span>
                    <span>
                        <?php if(get_field('etsy_url') && get_field('etsy')) : ?>
                            <a href="<?php the_field('etsy_url'); ?>" target="_blank"><i class="etsy"></i><?php the_field("etsy"); ?></a>
                        <?php endif ?>    
                    </span>
                </div>
            </div>
        </div>
    </article>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footerContact.png" class="imgfoot">
</section>

<?php

    // Footer
    get_footer();
    
?>