        <footer>
            <div class="footer-contact">
                <div class="w">
                    <h5>Me contacter</h5>
                    <div class="contacter">
                        <span> 
                            <a href="tel:+33620590805"><i class="tel"></i><?php the_field("num"); ?></a>
                        </span>
                        <span>   
                            <a href="mailto:deonne.parker@gmail.com"><i class="mail"></i>deonne.parker@gmail.com</a>
                        </span>
                    </div>
                </div>
                <hr>
                <div class="w">
                    <h5>Réseaux</h5>
                    <div class="reseaux">
                        <span>
                            <a href=""><i class="fb"></i>Yoga Terre-Ciel</a>
                        </span>
                        <span>
                            <a href=""><i class="insta"></i>Nom Instagram</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <span>&copy;<?php echo(date('Y')); ?></span>
                <span>Tous droits réservés</span>
                <span><a href="">Mentions légales</a></span>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>