        <footer>
            <div class="footer-contact">
                <div class="w">
                    <h5>Me contacter</h5>
                    <div class="contacter">
                        <span> 
                            <a href="tel:<?php the_field('num_footer', 'option'); ?>"><i class="tel"></i><?php the_field('num_footer', 'option'); ?></a>
                        </span>
                        <span>   
                            <a href="mailto:<?php the_field('mail_footer', 'option'); ?>"><i class="mail"></i><?php the_field('mail_footer', 'option'); ?></a>
                        </span>
                    </div>
                </div>
                <hr>
                <div class="w">
                    <h5>Réseaux</h5>
                    <div class="reseaux">
                        <span>
                            <a href="<?php the_field('fb_url', 'option'); ?>" target="_blank"><i class="fb"></i><?php the_field('facebook_compte', 'option'); ?></a>
                        </span>
                        <span>
                            <a href="<?php the_field('insta_url', 'option'); ?>" target="_blank"><i class="insta"></i><?php the_field('instagram_compte', 'option'); ?></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <span>&copy;<?php echo(date('Y')); ?></span>
                <span>Tous droits réservés</span>
                <span><a href="http://www.yoga-terre-ciel.com/mentions-legales">Mentions légales</a></span>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>