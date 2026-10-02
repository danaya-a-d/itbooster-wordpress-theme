<?php
/*
Template Name: Услуга 3.3.5 Русский
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
                        <li class="breadcrumbs__item">Тестирование</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title"><strong>Тестирование</strong> программного обеспечения</h1>
                    <p>Тестирование – один из важнейших этапов перед релизом Вашего продукта.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5_1.jpg"
                 alt="">
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <h2 class="visually-hidden">О нас</h2>
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">Для чего необходимо <strong>тестирование</strong></h2>
                            <p>Корректно ли работает Ваше ПО? Достаточно ли удобен и прост в использовании интерфейс? Выполняет ли приложение или сервис поставленные перед ним задачи адекватно? Ответить на эти вопросы сможет наша команда тестировщиков.</p>
                            <p>Никто полностью не застрахован от возможных ошибок. Даже монстры индустрии, такие как Goggle, Microsoft, Intel, AMD, Nvidia и прочие, обладая невероятно огромным штатом специалистов высочайшего уровня не застрахованы от ошибок и влияния человеческого фактора и периодически выпускают те или иные «заплатки» и обновления для своего ПО.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>Тестирование – это последний рубеж перед выходом проекта в стадию релиза. Для того чтобы подтвердить высокое качество выпускаемого продукта, он должен быть тщательно протестирован для выявления ошибок и неточностей, а также для определения степени удобства и интуитивности интерфейса.</p>
                            <a href="#page-form" class="button button--blue contact-button">Свяжитесь с нами</a>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5-blok-1-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5-blok-1-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Как это <strong>работает</strong>?</h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>Команда разработчиков после выпуска предварительной версии продукта передаёт его тестировщикам, которые на протяжение определённого времени используют продукт как обычные пользователи или сотрудники, проверяя удобство использования, а также все встроенные функции для последующего журналирования возникших проблем и передачи ПО на доработку.</p>
                </div>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Этапы <strong>тестирования</strong> продукта</h2>

                <div class="reception__text wow fadeInUp">

                    <ul>
                        <li>Передача продукта команде тестировщиков, предварительное изучение функционала и возможностей.</li>
                        <li>Анализ и оценка пользовательского интерфейса, составление отчетов  с оценкой его качества.</li>
                        <li>Тестирование функционала и возможностей ПО.</li>
                        <li>Составление отчетов о возникающих ошибках, передача информации о внесении необходимых исправлений.</li>
                        <li>Финальное тестирование продукта после внесения исправлений.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Убедитесь, что Ваш продукт <strong>будет безупречен</strong> в момент релиза</h2>

                        <p>Несомненно, что первое впечатление от продукта формирует мнение о нём. Если продукт выходит в релиз «сырым» и недоработанным, то даже после внесения исправлений слухи о низком качестве могут преследовать его длительное время, что крайне негативно повлияет на его репутацию. Поэтому крайне важно, чтобы программное обеспечение выходило в релиз в безупречном виде только после того, как оно было тщательно протестировано и в него были внесены все необходимые изменения и выполнены доработки. Такой подход к разработке ПО – обычная практика для нас. Мы делаем все возможное, чтобы Вы остались довольны нашей работой, а Ваша репутация оставалась непогрешимой, гарантируя максимально высокие качество и ценность Вашего продукта.</p>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5-blok-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>