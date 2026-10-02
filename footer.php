<footer class="footer wow fadeInUp">
    <div class="footer__wrapper wrapper">
        <?php if (is_front_page()) : ?>
            <a class="footer__logo logo">
                <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-dark.svg" alt="">
            </a>
        <?php else : ?>
            <a href="<?php echo get_home_url(); ?>" class="footer__logo logo">
                <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-dark.svg" alt="">
            </a>
        <?php endif; ?>

        <?php
        wp_nav_menu([
            'theme_location' => 'menu_main_header',
            'container' => 'ul',
            'menu_class' => 'footer__list',
        ]);
        ?>

        <ul class="footer__socials socials">
            <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['main']['instagram_url']; ?>"
                                         target="_blank">
                    <img class="socials__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icon-instagram.svg" alt="instagram">
                </a></li>

            <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['main']['facebook_url']; ?>"
                                         target="_blank">
                    <img class="socials__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icon-facebook.svg" alt="facebook">
                </a></li>

            <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['main']['twitter_url']; ?>"
                                         target="_blank">
                    <img class="socials__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/icon-twitter.svg" alt="twitter">
                </a></li>
        </ul>

        <div class="footer__contacts footer__contacts--first contacts">
            <p class="contacts__item"><?php echo $GLOBALS['main']['address']; ?></p>
            <a href="mailto:info@gmail.com" class="contacts__item">info@gmail.com</a>
        </div>

        <div class="footer__contacts footer__contacts--last contacts">
            <a href="tel:+<?php echo preg_replace('/\D/', '', $GLOBALS['main']['phone']);?>" class="contacts__item"><?php echo $GLOBALS['main']['phone']; ?></a>
            <a href="tel:+<?php echo preg_replace('/\D/', '', $GLOBALS['main']['phone_2']);?>" class="contacts__item"><?php echo $GLOBALS['main']['phone_2']; ?></a>
        </div>
    </div>

    <div class="footer__copy-wrapper wrapper">
        <p class="footer__copy"><?php echo $GLOBALS['main']['copy']; ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
