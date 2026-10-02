<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php

        if (is_post_type_archive('product')) {
            echo $GLOBALS['prod']['name'];
        } else the_title()

        ?></title>

    <?php wp_head(); ?>
</head>
<body>

<header class="header wow fadeInDown">
    <div class="header__wrapper wrapper">

        <?php if (is_front_page()) : ?>
            <a class="header__logo logo">
                <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
            </a>
        <?php else : ?>
            <a href="<?php echo get_home_url(); ?>" class="header__logo logo">
                <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
            </a>
        <?php endif; ?>

        <nav class="header__nav main-nav">
            <?php if (is_front_page()) : ?>
                <a class="main-nav__logo logo">
                    <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
                </a>
            <?php else : ?>
                <a href="<?php echo get_home_url(); ?>" class="main-nav__logo logo">
                    <img class="logo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
                </a>
            <?php endif; ?>

            <?php
            wp_nav_menu([
                'theme_location' => 'menu_main_header',
                'container' => 'ul',
                'menu_class' => 'main-nav__list',
            ]);
            ?>

            <?php
            $translations__current = pll_the_languages(array(
                "raw" => 1,
            ));

            $translations = pll_the_languages(array(
                "raw" => 1,
                "hide_current" => 1
            ));
            ?>

            <ul class="main-nav__languages languages">
                <li class="languages__item active"><?= $translations__current[pll_current_language()]['name'] ?></li>
                <?php foreach ($translations as $item) : ?>
                    <li class="languages__item"><a href="<?= $item['url'] ?>" class="languages__link"><?= $item['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>

            <ul class="main-nav__socials socials">
                <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['main']['instagram_url']; ?>"
                                             target="_blank">
                        <img class="socials__icon" src="<?php echo get_template_directory_uri() ?>/assets/img//icon-instagram.svg" alt="instagram">
                    </a></li>

                <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['main']['facebook_url']; ?>"
                                             target="_blank">
                        <img class="socials__icon" src="<?php echo get_template_directory_uri() ?>/assets/img//icon-facebook.svg" alt="facebook">
                    </a></li>

                <li class="socials__item"><a class="socials__link" href="<?php echo $GLOBALS['main']['twitter_url']; ?>"
                                             target="_blank">
                        <img class="socials__icon" src="<?php echo get_template_directory_uri() ?>/assets/img//icon-twitter.svg" alt="twitter">
                    </a></li>
            </ul>

            <div class="main-nav__contacts contacts">
                <a href="tel:+<?php echo preg_replace('/\D/', '', $GLOBALS['main']['phone']);?>" class="contacts__item"><?php echo $GLOBALS['main']['phone']; ?></a>
                <a href="mailto:<?php echo $GLOBALS['main']['email'];?>" class="contacts__item"><?php echo $GLOBALS['main']['email'];?></a>
            </div>
        </nav>

        <button class="header__menu-btn"></button>
    </div>
</header>