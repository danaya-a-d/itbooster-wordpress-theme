<?php
/*
Template Name: Услуга 3.5.2 Русский
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
                        <li class="breadcrumbs__item"><a>Облачные услуги</a></li>
                        <li class="breadcrumbs__item">Облачные решения и миграция</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Облачные решения и <strong>миграция</strong></h1>
                    <p>Обеспечьте бесперебойную работу систем для достижения бизнес-целей.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-5-2_1.jpg"
                 alt="">
        </section>

        <section class="team">
            <div class="team__wrapper wrapper">
                <ul class="team__list team-slider">
                    <li class="team-slider__item">
                        <img class="team-slider__image wow animLeft" src="<?php echo get_template_directory_uri() ?>/assets/img/3-5-2-blok-1.jpg" alt="">
                        <div class="team-slider__text-block wow animRight">
                            <div class="team-slider__text">
                                <h2>Облако – <strong>наилучшее решение</strong> для большинства компаний</h2>
                                <p>Почувствуйте и используйте огромный потенциал облака, модернизируя и оптимизируя текущую локальную инфраструктуру.  Используя наши опыт и наработки, мы применяем комплексный подход к миграции и переносу данных, что позволит Вашей компании выполнить все действия, необходимые для безопасного перехода на CloudNative.</p>

                                <a href="#page-form" class="button button--blue contact-button">Свяжитесь с нами</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="info">
            <div class="info__wrapper wrapper">
                <h2 class="info__title title">Схема <strong>перехода</strong> в облако</h2>
                <p class="info__about">Мы разработали удобную, проверенную схему, состоящую из нескольких продуманных шагов, которая позволит совершить миграцию быстро и безболезненно. </p>

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Шаг 1: Анализ</h4>
                            <p>Анализ задач и требований -> Анализ коммерческих и технических ресурсов -> Определение объема и типа переносимых данных -> Определение сроков миграции -> Формирование команды специалистов.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Шаг 2: Планирование</h4>
                            <p>Выбор подходящей облачной архитектуры -> Выбор облачного провайдера -> Расчет стоимости решения -> Разработка стратегии миграции -> Учёт рисков -> Выбор типа миграции (постепенная или полная) -> Создание плана миграции</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Шаг 3: Миграция</h4>
                            <p>Установка и настройка сервисов -> Запуск и тестирование сервисов -> Перенос данных -> Решение возникших проблем -> Оптимизация</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Шаг 4: Поддержка</h4>
                            <p>Расширение возможностей и функционала облачного решения -> Поддержка и модернизация -> Масштабирование</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Для чего <strong>переходить</strong> в облако вместе с нами</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Миграция в облако даст Вам множество преимуществ, включая улучшенные масштабируемость, управляемость и безопасность. Мигрируя вместе с нами, Вы можете приумножить эти преимущества. Что Вы получаете:</p>

                    <ul>
                        <li>Комплексная поддержка сертифицированных специалистов.</li>
                        <li>Проверенная облачная платформа, использующая все актуальные технологии.</li>
                        <li>Поддержка в области анализа бизнес-процессов, DevOps, CloudOps, DataSolutions, безопасности.</li>
                        <li>Уверенность в принятии решений, так как они буду основываться на полученных знаниях, благодаря анализу бизнес-процессов, затрат, рисков, преимуществ и недостатков всех возможных вариантов использования облачных решений.</li>
                        <li>Доступ к широкому спектру возможностей для дополнительных проектов.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>