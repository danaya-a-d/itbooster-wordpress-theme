<?php
/*
Template Name: Услуга 3.7 Русский
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
                        <li class="breadcrumbs__item">Маркетинг</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Онлайн-маркетинг</h1>
                    <p>Мы - Ваш надежный партнер по развитию и цифровой коммерции.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-7_1.jpg"
                 alt="">
        </section>

        <section class="team">
            <div class="team__wrapper wrapper">
                <ul class="team__list team-slider">
                    <li class="team-slider__item">
                        <img class="team-slider__image wow animLeft" src="<?php echo get_template_directory_uri() ?>/assets/img/3-7-blok-1.jpg" alt="">
                        <div class="team-slider__text-block wow animRight">
                            <div class="team-slider__text">
                                <h2>Мы работаем вместе с <strong>Вашей бренд-командой</strong> в качестве Вашего партнера по развитию</h2>
                                <p>У нас есть опыт в разработке высокоэффективных стратегий для максимальной рентабельности Вашего продукта.</p>

                                <a href="#page-form" class="button button--blue contact-button">Свяжитесь с нами</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="banner banner--margin-top">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Полноценный и <strong>разносторонний</strong> подход</h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>Мы прилагаем усилия на протяжении всего проекта для создания решений, повышающих узнаваемость и ценность Вашего продукта.</p>
                </div>
            </div>
        </section>

        <section class="path">
            <div class="path__main-wrapper wrapper">
                <h2 class="path__title title wow fadeInUp">Как мы это <strong>делаем</strong></h2>
                <div class="path__list-container">
                    <div class="path__list-wrapper path__list-wrapper--tree swiper-container">
                        <ul class="path__list stages swiper-wrapper">
                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-30.svg" alt="">
                                </div>

                                <p class="stages__title">Исследования и анализ</p>

                                <p class="stages__text">В первую очередь необходимо понять каким образом позиционировать Ваш продукт на рынке. Для этого наши исследователи-аналитики изучат рынок и подготовят все необходимые рекомендации.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-31.svg" alt="">
                                </div>

                                <p class="stages__title">Дизайн и оптимизация</p>

                                <p class="stages__text">
                                    Узнаваемый дизайн – один из важных факторов в продвижении продукта. Наши дизайнеры создадут креативный дизайн, который станет визитной карточкой Вашего продукта или услуги. А специалисты по SEO выведут Ваш ресурс в верхние строки самых популярных поисковых систем, что приведёт к увеличению и конвертируемости траффика.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-32.svg" alt="">
                                </div>

                                <p class="stages__title">Креатив и творческий подход</p>

                                <p class="stages__text">
                                    Мы поможем Вам создать устойчивое конкурентное преимущество с помощью нашей креативной команды на основе данных, полученных от аналитиков, которое создаст идентичность бренда, привлечёт трафик и потребителей.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-33.svg" alt="">
                                </div>

                                <p class="stages__title">Платные СМИ</p>

                                <p class="stages__text">
                                    Ваши будущие клиенты проводят часы ежедневно на таких платформах, как Facebook, Instagram и Google — мы встретим их там со стратегическим таргетингом, донесём до них необходимую информацию.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-34.svg" alt="">
                                </div>

                                <p class="stages__title">Электронная почта и SMS-маркетинг</p>

                                <p class="stages__text">
                                    Наши сервисы автоматизации рассылок по электронной почте, SMS, мессенджерам взращивают потенциальных клиентов и способствуют их удержанию.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="path__arrows wow fadeInUp">
                        <div class="path__slider-button-prev swiper-button-prev"></div>
                        <div class="path__slider-button-next swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>Что Вы получите</strong> в результате</h2>

                <div class="reception__text wow fadeInUp">
                    <ul>
                        <li>Полный анализ рынка и отчет о возможном размещении Вашего продукта.</li>
                        <li>Выводы и советы о правильном позиционировании продукта.</li>
                        <li>Пошаговый план проведения рекламных кампаний и акций.</li>
                        <li>Технические действия по оптимизации сайтов.</li>
                        <li>Другие рекламные мероприятия, например размещение на платных ресурсах, работа с соцсетями, мессенджерами, разнообразные рассылки рекламной информации.</li>
                        <li>Постоянный анализ рентабельности и успешности Вашего продукта на рынке, внесение корректировок в маркетинговые мероприятия.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>