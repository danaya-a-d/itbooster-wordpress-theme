<?php
/*
Template Name: Услуга 3.3.3 Русский
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
                        <li class="breadcrumbs__item"><a>Разработка ПО</a></li>
                        <li class="breadcrumbs__item">Проектирование и архитектура ПО</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Проектирование и архитектура<br><strong>программного обеспечения</strong></h1>
                    <p>Убедитесь, что компоненты Вашей системы эффективно работают вместе, выполняя задачи бизнеса.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title"><strong>Хорошо продуманное</strong> и адекватно спроектированное ПО</h2>

                        <p>Мы практикуем целостный подход и работаем с комплексной архитектурой решения.</p>
                        <p>Мы помогаем Вам на всех этапах: от сбора информации и требований по проекту до внедрения и развертывания Вашего продукта, как нового, так и существующего.</p>
                        <p>Мы предоставим все необходимые инструменты и данные для принятия правильных решений.</p>

                        <a href="#page-form" class="button button--blue contact-button">Свяжитесь с нами</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Что такое <strong>архитектура</strong>?</h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>Архитектура – это не конечный продукт, а некий процесс, в котором рука об руку работают специалисты разнообразных отраслей. Они компетентны во многих областях, включая бизнес-анализ, облачные решения, микросервисы, Big Data и т.п. Проводя всесторонний анализ, мы гарантируем, что Ваш продукт будет работать безупречно и соответствовать Вашим бизнес-целям.</p>
                </div>
            </div>
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <h2 class="visually-hidden">О нас</h2>
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">Что Вы <strong>получите</strong></h2>
                            <p>В первую очередь – основу, скелет планируемого продукта, принципы работы, внутренних и внешних взаимодействий. Архитектура проекта для нас — это не отдельная услуга, а часть более широкой экосистемы.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>Архитекторы проектов тесно сотрудничают с инженерами-программистами, бизнес-аналитиками, специалистами по обеспечению качества ПО, специалистами по безопасности, обеспечивая бесперебойную работу программного обеспечения и его компонентов в будущем.</p>
                            <p>В результате конечный продукт хорошо выполняет свою работу, а также является безопасным, удобным в сопровождении и масштабируемым.</p>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3-blok-3-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3-blok-3-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="discuss discuss--no-margin">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>