<?php
/*
Template Name: Главная
*/
?>

<?php $page_id = get_the_ID() ?>

<?php get_header() ?>

<main class="page-main">
    <section class="first-screen">
        <div class="first-screen__container swiper-container">
            <ul class="first-screen__sliders swiper-wrapper">
                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Мы - тестировщики программного
                            обеспечения</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-1.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Мы - <br>маркетологи</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-2.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Мы - дизайнеры интерфейсов</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-3.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Мы - веб-разработчики и веб-дизайнеры</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-4.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Мы - инженеры-программисты</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-5.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Мы - технические консультанты</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-6.jpg" alt="">
                    </div>
                </li>
            </ul>

            <!-- Add Pagination -->
            <div class="first-screen__swiper-pagination wow fadeInLeft"></div>
            <div class="first-screen__counter counter wow fadeIn"></div>
        </div>
    </section>

    <section class="about">
        <div class="about__wrapper wrapper">
            <h2 class="visually-hidden">О нас</h2>

            <div class="about__content about__content--scroll wow fadeInUp hidden">
                <div class="about__text">
                    <div>
                        <p><strong>Мы – группа энтузиастов</strong>, объеденившихся для того, чтобы выйти за рамки
                            условностей, навязываемых менеджментом больших организаций. <strong>Наша команда</strong>
                            состоит из высококлассных специалистов разнообразных отраслей IT-индустрии. Каждый из нас
                            имеет
                            многолетний опыт в своей сфере.</p>

                        <p class="more">Мы занимаемся всем спектром <strong>IT-услуг</strong>, от консультаций, до
                            разработки
                            веб-проектов и программного обеспечения, а также маркетингом и продвижением продуктов на
                            рынке<strong>IT-технологий</strong>. Пропагандируя отсутствие навязываемых стереотипов, мы
                            готовы
                            создать проект любой сложности, и пройти с Вами весь путь от концепции до релиза, воплощая
                            самые смелые и нестандартные идеи!</p>
                    </div>

                    <a href="#page-form" class="button button--blue contact-button contact-button--nomob">Свяжитесь с
                        нами</a>
                </div>

                <div class="about__more"></div>

                <div class="about__image-block wow fadeInUp">
                    <img class="about__image"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/about-image.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="banner__wrapper wrapper">
            <h2 class="banner__title title wow fadeInLeftBig"><strong>Путь от</strong> концепции до&nbsp;релиза</h2>

            <div class="banner__text wow fadeInRightBig">
                <p><strong>Мы выслушаем, проконсультируем и, разработаем</strong> для Вас удобные в использовании
                    высококлассные <strong>IT-продукты</strong>.</p>
                <p>Благодаря нашему опыту и коллективной работе, мы нашли способ приносить пользу нашим клиентам с
                    максимальной эффективностью.</p>
            </div>
        </div>
    </section>

    <section class="path">
        <div class="path__main-wrapper wrapper">
            <div class="path__list-container">
                <div class="path__list-wrapper swiper-container">
                    <ul class="path__list stages swiper-wrapper">
                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-1.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Стратегический анализ</p>

                            <p class="stages__text">
                                <strong>Результат:</strong> набор рекомендаций, ведущих к максимально эффективному
                                решению
                                задачи.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-2.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Техническое планирование и&nbsp;дизайн</p>

                            <p class="stages__text">
                                <strong>Результат:</strong> набор технических решений, план развития и поддержки,
                                готовый дизайн продукта.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-3.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Разработка продукта</p>

                            <p class="stages__text">
                                <strong>Результат:</strong> готовый к использованию продукт.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-4.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Маркетинговые исследования, разработка плана продвижения
                                продукта</p>

                            <p class="stages__text">
                                <strong>Результат:</strong> продвижение продукта на рынке.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-5.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Управление, поддержка, инновации</p>

                            <p class="stages__text">
                                <strong>Результат:</strong> развитие продукта, разработка инноваций для поддержания
                                максимальной
                                ценности продукта.
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

    <section class="team">
        <div class="team__wrapper wrapper">
            <ul class="team__list team-slider">
                <li class="team-slider__item">
                    <img class="team-slider__image wow animLeft"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/team-slider-img-1.jpg" alt="">
                    <div class="team-slider__content wow animRight">
                        <div class="team-slider__text">
                            <h2><strong>Представьте себе команду,</strong> которая расширит возможности Вашего бизнеса.
                            </h2>
                        </div>

                        <ul class="team-slider__toggles">
                            <li class="team-slider__toggle active">01</li>
                            <li class="team-slider__toggle">02</li>
                            <li class="team-slider__toggle">03</li>
                        </ul>
                    </div>
                </li>
                <li class="team-slider__item visually-hidden">
                    <img class="team-slider__image"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/team-slider-img-1.jpg" alt="">
                    <div class="team-slider__content">
                        <div class="team-slider__text">
                            <h2><strong>Представьте себе IT-сервисы,</strong> которые ускорят Ваши инновации.</h2>
                        </div>

                        <ul class="team-slider__toggles">
                            <li class="team-slider__toggle">01</li>
                            <li class="team-slider__toggle active">02</li>
                            <li class="team-slider__toggle">03</li>
                        </ul>
                    </div>
                </li>
                <li class="team-slider__item visually-hidden">
                    <img class="team-slider__image"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/team-slider-img-1.jpg" alt="">
                    <div class="team-slider__content">
                        <div class="team-slider__text">
                            <h2><strong>Представьте себе надежного технического партнёра</strong> для решения всех Ваших
                                задач в сфере IT.
                            </h2>
                        </div>

                        <ul class="team-slider__toggles">
                            <li class="team-slider__toggle">01</li>
                            <li class="team-slider__toggle">02</li>
                            <li class="team-slider__toggle active">03</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="service">
        <div class="service__wrapper wrapper">
            <h2 class="service__title title wow fadeInUp"><strong>Основные</strong> услуги</h2>

            <ul class="service__list">
                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-1.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Технические консультации</h4>
                        <p>Высококлассная помощь в выборе технологических решений, необходимых для Вашего бизнеса.
                            Автоматизация бизнес-процессов. Аудит Ваших текущих программных комплексов.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-2.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Веб-разработка</h4>
                        <p>Мы разработаем для Вас нестандартный дизайн, веб-проекты любой сложности, от сайта-визитки,
                            до информационного портала. Веб приложения для Вашего бизнеса онлайн.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-3.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Разработка программного обеспечения на заказ</h4>
                        <p>Быстрое и эффективное развёртывание специализированных решений, отвечающих потребностям и
                            возможностям Вашего бизнеса.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-4.svg" alt="">
                    <div class="serv-card__text">
                        <h4>UX/UI дизайн</h4>
                        <p>Создание дизайна онлайн-продуктов и интерфейсов с максимальным уровнем комфорта,
                            интуитивности и эффективности для пользователей Вашего продукта.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-5.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Облачные услуги</h4>
                        <p>Управляйте своими данными, анализируйте их и получайте необходимые результаты с максимальным
                            уровнем эффективности и безопасности с помощью облачных решений. Максимизируйте ценность
                            информации – одного из Ваших основных активов.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-6.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Информационная безопасность</h4>
                        <p>Невозможно переоценить важность вопроса безопасности. Обеспечьте максимальным уровнем
                            безопасности используемые в Ваших проектах данные. Не дайте шанса недобросовестным
                            конкурентам и другим злоумышленникам.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-7.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Маркетинг</h4>
                        <p>Специалисты по маркетингу нового уровня научат Вас правильно позиционировать Ваш продукт на
                            рынке. Мы проконсультируем Вас и создадим максимально адаптированные рекламные продукты,
                            основанные на результатах анализа рынка и Ваших данных для продвижения Вашей компании и
                            увеличения продаж.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-8.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Телемаркетинг</h4>
                        <p>Увеличьте продажи Вашего продукта или услуги с помощью отдела телемаркетинга. Один из самых
                            эффективны способов продаж – прямое общение по телефону. Найдите самые эффективные способы с
                            помощью нашей команды и баз данных телефонных номеров. Кроме того мы поможем спроектировать,
                            организовать и оборудовать Ваш собственный отдел сотрудников, которые смогут увеличить
                            количество и эффективность продаж.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="discuss">
        <?php include 'contact-form.php' ?>
    </section>
</main>

<?php get_footer() ?>

