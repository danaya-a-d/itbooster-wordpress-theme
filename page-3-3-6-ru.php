<?php
/*
Template Name: Услуга 3.3.6 Русский
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
                        <li class="breadcrumbs__item">Поддержка</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title"><strong>Поддержка и </strong>обслуживание</h1>
                    <p>Будьте максимально спокойны благодаря работе нашей команды поддержки и обслуживанию после релиза,
                        а также неограниченному количеству возможных исправлений.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-6_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Техническая <strong>поддержка</strong> после релиза</h2>

                        <p>Получите техническую помощь от команды специалистов, которые используют актуальный
                            инструментарий и обладают большим набором знаний, практическим опытом и знают Ваш продукт от
                            начала и до конца.</p>
                        <p>Эта услуга обычно предоставляется отдельно после этапа внедрения программного продукта, делая
                            возможным дальнейшее развитие проекта методом запроса обновления его функционала.</p>
                        <p>Это означает, что Вы получите персональную команду, которая будет всегда готова помочь Вам
                            после того, как Вы уже начали использовать разработанный продукт. Так же в сферу задач
                            поддержки входит гарантированное исправление возможных ошибок, обнаруженных в будущем.</p>

                        <a href="#page-form" class="button button--blue contact-button">Свяжитесь с нами</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-6-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="reception reception--dark">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>Что Вы получите </strong> в результате</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Услуга поддержки означает, что наши инженеры-программисты готовы в любой момент как помочь в решении возникших проблем, так и доработать Ваше ПО согласно дополнительному запросу. Преимущества службы поддержки:</p>

                    <ul>
                        <li>Программное обеспечение постоянно обновляется.</li>
                        <li>По запросу мы готовы выполнить для Вас любое расширение функционала.</li>
                        <li>Непрерывность бизнес-процессов и минимальное время реагирования на устранение неполадок.</li>
                        <li>Снижение затрат – нет необходимости содержать свою команду поддержки.</li>
                        <li>Высокие стандарты обслуживания на базе современной методологии.</li>
                        <li>Гарантированное время реакции на возникающие проблемы.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="techs">
            <div class="techs__wrapper wrapper">
                <h2 class="techs__title title wow fadeInUp"><strong>Технологии</strong>, которые мы используем</h2>

                <ul class="techs__list wow fadeInUp">
                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-44.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-45.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-46.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>