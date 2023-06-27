</main><!-- main -->

<footer id="site-footer">
    <div class="footer-col">
        <a class="footer-logo" href="<?= esc_url(home_url()) ?>">
            <img src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/images/Logo-icon.svg') ?>" alt="Luxury Company logo icon">
        </a>
    </div>
    <div class="footer-col">
        <?php if (has_nav_menu('footer')) : ?>
            <div class="footer-menu-container">
                <nav aria-label="Footer Navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'footer-nav nav',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
                </nav>
            </div>
        <?php endif; ?>
        <div class="footer-copyright-container">
            &copy;<?= date('Y') ?> Luxury Company. All Rights Reserved.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>