<?php
/*
Template Name: О нас
*/
?>

<?php $page_id = get_the_ID() ?>

<?php get_header() ?>

    <main class="page-main">
        <section class="upper-block">
            <div class="upper-block__wrapper wrapper">
                <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="index.html">Главная</a></li>
                        <li class="breadcrumbs__item">О нас</li>
                    </ul>
                </div>

                <div class="upper-block__text wow fadeInUp">
                    <h1 class="upper-block__title title">Мы – глобальная <strong>IT компания</strong></h1>
                    <p>Мы предоставляем полный спектр услуг в IT-индустрии по всему миру.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/head-photo-1.jpg" alt="">
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <h2 class="visually-hidden">О нас</h2>
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <p><strong>Мы – молодая IT компания,</strong> зарегистрированная в 2023-м году, состоящая из энтузиастов
                            своего дела. Не смотря на недавний выход на рынок, наши сотрудники являются опытными специалистами,
                            каждый в своей отрасли. Богатый предыдущий опыт разработок, участие в большом количестве
                            разнообразных проектов дает нам уверенность в том, что наши специалисты с максимальными качеством и
                            эффективностью смогут выполнить проект любой сложности.</p>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                        <p>Ограничения, накладываемые руководителями многих компаний IT-отрасли, не дают возможности сотрудникам
                            развиваться и выходить за границы корпоративных правил и установок, что зачастую влияет на качество
                            и возможности разрабатываемых проектов, тянет их назад в техническом плане. Всегда проще идти
                            проторенной дорогой, чем тратить время на исследование новых путей. Но для нас это не представляет
                            интереса. Мы – команда энтузиастов, которые собрались в одном месте для того, чтобы упразднить все
                            ограничения и полагаться лишь на свои опыт, интеллект и креативность, выходя за рамки обыденности,
                            привычек и корпоративных правил. Это позволяет нам нестандартно смотреть на принципы разработки, и
                            мы готовы взяться за любую, даже самую сложную, задачу с индивидуальными потребностями, и решить её
                            максимально эффективно. <strong>Мы – изобретатели новых подходов и практик в сфере IT-услуг.</strong></p>

                            <a href="#page-form" class="button button--blue contact-button">Свяжитесь с нами</a>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/about-us-img-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/about-us-img-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper wrapper">
                <h2 class="banner__title title wow fadeInLeftBig"><strong>География</strong> нашей компании</h2>
                <div class="banner__text wow fadeInRightBig">
                    <p><strong>Мы – международная компания</strong>, со штаб-квартирой в Европе. Наш головной офис находится
                        в <strong>Польше, Варшаве</strong>. Тем не менее, мы сотрудничаем с компаниями и индивидуальными
                        клиентами по всему миру.</p>
                    <p>Кроме того, часть наших сотрудников работает удалённо, что позволяет гибко настраивать
                        производственные процессы, а также набирать дополнительную производственную силу для разработки
                        продуктов в ситуации высокой загруженности разрабатываемыми проектами.</p>
                </div>
            </div>
        </section>

        <section class="path">
            <div class="path__main-wrapper wrapper">
                <h2 class="path__title title wow fadeInUp"><strong>Кого мы</strong> обслуживаем</h2>
                <div class="path__list-container">
                    <div class="path__list-wrapper path__list-wrapper--tree swiper-container">
                        <ul class="path__list strategies swiper-wrapper">
                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-1.svg" alt="">
                                </div>

                                <p class="strategies__title">Предприятия</p>

                                <p class="strategies__text">
                                    Если Вы владелец малого либо большого предприятия – мы поможем Вам решить Ваши задачи. Системы автоматизации рабочих мест, разработка ПО для производства, модернизация и разработка систем безопасности, облачные решения для среднего и крупного бизнеса – это то, что мы любим и умеем.
                                </p>
                            </li>

                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-6.svg" alt="">
                                </div>

                                <p class="strategies__title">Компании по разработке ПО и веб-проектов</p>

                                <p class="strategies__text">
                                    Мы поможем разработать маркетинговую стратегию, рекламную компанию и вывести продукт на рынок.
                                </p>
                            </li>

                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-7.svg" alt="">
                                </div>

                                <p class="strategies__title">Индивидуальные клиенты</p>

                                <p class="strategies__text">
                                    Даже для индивидуальных предпринимателей и малого бизнеса мы сможем предложить весь спектр услуг в сфере разработки программного продукта, маркетинга и продвижения проектов в сети.
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

        <section class="service">
            <div class="service__wrapper wrapper">
                <h2 class="service__title title wow fadeInUp"><strong>Карта</strong> наших услуг</h2>

                <ul class="service__list">
                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-1.svg" alt="">
                        <div class="serv-card__text">
                            <h4>Консалтинг</h4>

                            <ul>
                                <li><a>Разработка стратегии продукта.</a></li>
                                <li><a>Консалтинг в сфере инжиниринга программных продуктов.</a></li>
                                <li><a>Аудит существующих систем и инфраструктуры.</a></li>
                                <li><a>Автоматизация бизнес-процессов и производства.</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-2.svg" alt="">
                        <div class="serv-card__text">
                            <h4>Веб-разработка</h4>

                            <ul>
                                <li><a>Разработка интернет-порталов любой сложности.</a></li>
                                <li><a>Разработка всех типов сайтов, от лендинга, до торговой площадки. </a></li>
                                <li><a>Веб-дизайн</a></li>
                                <li><a>Разработка веб-приложений.</a></li>
                                <li><a>Поддержка веб-проектов.</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-3.svg" alt="">
                        <div class="serv-card__text">
                            <h4>Разработка ПО</h4>

                            <ul>
                                <li><a>Выделенные команды.</a></li>
                                <li><a>Разработка индивидуального ПО.</a></li>
                                <li><a>Проектирование и архитектура ПО .</a></li>
                                <li><a>DevOps</a></li>
                                <li><a>Тестирование разработанного нами или существующего ПО.</a></li>
                                <li><a>Поддержка программных комплексов.</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-4.svg" alt="">
                        <div class="serv-card__text">
                            <h4>UX/UI дизайн</h4>

                            <ul>
                                <li><a>Разработка дизайна веб-сайтов.</a></li>
                                <li><a>Разработка дизайна и пользовательских интерфейсов ПО и веб-приложений. </a></li>
                                <li><a>Разработка корпоративных стилей и создание бренд-буков.</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-5.svg" alt="">
                        <div class="serv-card__text">
                            <h4>Облачные услуги</h4>

                            <ul>
                                <li><a>Консультации по вопросам облачных решений.</a></li>
                                <li><a>Облачные решения и миграция.</a></li>
                                <li><a>Консалтинг по вопросам безопасности.</a></li>
                                <li><a>Комплексные решение по защите данных</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-6.svg" alt="">
                        <div class="serv-card__text">
                            <h4>Информационная безопасность</h4>

                            <ul>
                                <li><a>Консультации и аналитика существующих систем безопасности.</a></li>
                                <li><a>Модернизация и актуализация защиты данных в готовых системах.</a></li>
                                <li><a>Испытание безопасности предприятия (белый «хакинг»). </a></li>
                                <li><a>Разработка и внедрение систем безопасности для компаний и предприятий.</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-7.svg" alt="">
                        <div class="serv-card__text">
                            <h4>Маркетинг</h4>

                            <ul>
                                <li><a>Рыночная аналитика и оценка рентабельности продукта.</a></li>
                                <li><a>Маркетинговые исследования.</a></li>
                                <li><a>Разработка имиджа и рекламных кампаний.</a></li>
                                <li><a>Разработка маркетинговых мероприятий, продвижение товара на рынке.</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="service__item serv-card wow fadeInRight">
                        <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-8.svg" alt="">
                        <div class="serv-card__text">
                            <h4>Телемаркетинг</h4>

                            <ul>
                                <li><a>Услуги телемаркетинга, продвижение товаров и услуг.</a></li>
                                <li><a>Создание и организация отдела телемаркетинга в Вашей компании.</a></li>
                                <li><a>Создание программных продуктов, оборудование и настройка отделов телемаркетинга.</a></li>
                                <li><a>Контроль, модернизация и поддержка отделов телемаркетинга.</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="using-tech">
            <div class="using-tech__wrapper wrapper">
                <h2 class="using-tech__title title wow fadeInUp"><strong>Используемые</strong> технологии</h2>

                <ul class="using-tech__nav-list wow fadeInUp">
                    <li class="using-tech__nav-item active"><span>Back-end и языки программирования</span></li>
                    <li class="using-tech__nav-item"><span>Интерфейсные языки и фреймворки</span></li>
                    <li class="using-tech__nav-item"><span>DevOps: контейнеризация, автоматизация, мониторинг</span></li>
                    <li class="using-tech__nav-item"><span>Базы данных</span></li>
                </ul>

                <ul class="using-tech__list wow fadeInUp active">
                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-1.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-2.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-3.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-4.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-5.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-6.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-7.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-8.png" alt="">
                    </li>
                </ul>
                <ul class="using-tech__list">
                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-9.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-10.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-11.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-12.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-13.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-14.png" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-15.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-16.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-17.jpg" alt="">
                    </li>
                </ul>
                <ul class="using-tech__list">
                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-18.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-19.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-20.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-21.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-22.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-23.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-24.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-25.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-26.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-27.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-28.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-29.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-30.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-31.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-32.jpg" alt="">
                    </li>
                </ul>
                <ul class="using-tech__list">
                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-33.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-34.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-35.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-36.jpg" alt="">
                    </li>

                    <li class="using-tech__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-37.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>