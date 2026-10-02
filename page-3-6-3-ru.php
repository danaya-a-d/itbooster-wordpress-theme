<?php
/*
Template Name: Услуга 3.6.3 Русский
*/
?>

<?php get_header() ?>

    <main class="page-main">
        <section class="upper-block">
            <div class="upper-block__wrapper wrapper">
                <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="<?php echo get_home_url(); ?>">Главная</a></li>
                        <li class="breadcrumbs__item"><a>Услуги</a></li>
                        <li class="breadcrumbs__item"><a>Информационная безопасность</a></li>
                        <li class="breadcrumbs__item">Модернизация и поддержка систем безопасности</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Модернизация и поддержка<br><strong>систем безопасности</strong></h1>
                    <p>Любая, даже самая современная система рано или поздно становится небезопасной.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-3_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Постоянный мониторинг кибер-безопасности – <strong>залог её надежности</strong></h2>

                        <p>Как говорят специалисты: «Если Вашу систему никогда не взламывали – это не значит, что она абсолютно устойчива. Это значит лишь то, что Вами ещё не занимались всерьёз».</p>
                        <p>Даже самая стойкая ко взломам и угрозам система защиты со временем теряет свою актуальность по причине нахождения разнообразных «дыр» в различных операционных системах, оборудовании и другом ПО, появлении новых способов взлома и уязвимостей. Для поддержания защиты в актуальном состоянии необходим её беспрерывный мониторинг и обновление, а в некоторых случаях – серьезная модернизация или даже полная замена.</p>

                        <a href="#page-form" class="button button--blue contact-button">Свяжитесь с нами</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-3-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Старые <strong>инструменты слепы</strong> к новым угрозам</h2>

                <div class="banner__text wow fadeInRightBig">
                    <div>
                        <p>Вы не сможете предсказать атаку, глядя на вчерашние угрозы. Предотвращайте, обнаруживайте и реагируйте на угрозы благодаря своевременной актуализации Вашей системы безопасности. Наши специалисты по безопасности помогут Вам:<p>
                        <ul>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Оценить надежность и актуальность средств защиты.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Проанализировать адекватность и понимание сотрудников в вопросах безопасности.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Обновить и актуализировать инструменты.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Разработать и создать новое решение для безопасного ведения бизнеса.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Провести испытания и аудит, обнаружив все слабые места и вероятные угрозы.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>Что Вы получите</strong> в результате</h2>

                <div class="reception__text wow fadeInUp">
                    <ul>
                        <li>Анализ и изучение Вашей текущей инфраструктуры, относящейся к вопросам безопасности.</li>
                        <li>Выводы команды специалистов с указанием тонких мест, «дыр» в безопасности и вероятных угроз.</li>
                        <li>Разработку дорожной карты по устранению проблем с оценкой эффективности и стоимости.</li>
                        <li>Обновление, настройку системы, замену программного обеспечения.</li>
                        <li>Рекомендации по разработке новой системы безопасности в случае, если модификация существующей нецелесообразна.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>