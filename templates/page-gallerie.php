<?php

    /*
        Template Name: Galerie
    */

    // Header
    get_header();

    // Image
    $image= get_field('images');

?>
<section class="page-gallerie" id="photo">
    <h2>Un aperçu</h2>
    <article>
        <div class="t">
            <h3>Photos</h3>
            <i class="icone-photo"></i>
        </div>
        <!--GALERIE PHOTO-->
        <div class="gallerie">
            <?php 
                $images = get_field('galerie');
                if( $images ): ?>
                    <ul class="acf-gallery">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['gallery-thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                                <p><?php echo esc_html($image['caption']); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
        </div>
    </article>
    <article>
        <div class="t">
            <h3>Vidéos</h3>
            <i class="icone-video"></i>
        </div>
        <!--GALERIE VIDEO-->
        <?php if( have_rows( 'gallerie_video' ) ): ?>
        <div class="gallerie_video">
            <?php while ( have_rows( 'gallerie_video' ) ) : the_row(); ?>
            <div class="videos">
                <video controls width=100%>
                    <source src="<?php the_sub_field( 'videos' );?>" type="video/mp4">
                </video>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </article>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footerGallerie.png" class="imgfoot">
</section>   
    

<?php

    // Footer
    get_footer();
    
?>