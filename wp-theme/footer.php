    <footer class="footer">
        <div class="footer__top">
            <div class="footer__left">
                <div class="footer__label">
                    Dokładamy wszelkich starań aby nasi klienci byli zadowoleni z dostarczonych usług.
                </div>
                <div class="footer__social">
                    <div class="footer__social-title">Subskrybuj nas:</div>
                    <div class="footer__social-items">
                        <a class="footer__social-item" href="<?php the_field('facebook', 22); ?>">
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/icons/footer/facebook.svg" alt="facebook">
                        </a>
                        <a class="footer__social-item" href="<?php the_field('instagram', 22); ?>">
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/icons/footer/instagram.svg" alt="instagram">
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="footer__midle">
                <div class="footer__menu">Menu</div>
                <nav>
                    <?php
                        wp_nav_menu( [
                            'menu'                 => 'Footer',
                            'container'            => 'false',
                            'menu_class'           => 'footer__menu-items',
                            'echo'                 => true,
                            'fallback_cb'          => 'wp_page_menu',
                            'items_wrap'           => '<ul class="footer__menu-items">%3$s</ul>',
                            'depth'                => 0
                        ] );
                    ?>
                </nav>
            </div>
    
            <a href="<?php echo home_url(); ?>" class="footer__logo">
                <img src="<?php the_field('logo_footer', 22); ?>" alt="logo footer">
            </a>
        </div>

        <div class="footer__divider"></div>

        <div class="footer__rights">All rights reserved</div>
    </footer>
    
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php 
        wp_footer();
    ?>
</body>
</html>