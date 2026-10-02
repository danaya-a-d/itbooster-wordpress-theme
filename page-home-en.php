<?php
/*
Template Name: Главная Английский
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
                        <h1 class="first-screen__title title wow backInLeft">We are<br> software testers</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-1.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">We are marketing specialists</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-2.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">We are interface designers</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-3.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">We are web developers and web
                            designers</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-4.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">We are software engineers</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-5.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">We are technical consultants</h1>
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
            <h2 class="visually-hidden">About us</h2>

            <div class="about__content about__content--scroll wow fadeInUp hidden">
                <div class="about__text">
                    <div>
                        <p><strong>We are a group of enthusiasts</strong> who have come together to go beyond the
                            conventions imposed by the management of large organizations. <strong>Our team</strong>
                            consists of high-class specialists from various branches of the IT industry. Each of us has
                            many years of experience in our field.</p>

                        <p class="more">We do the whole range of <strong>IT-services</strong>, from consulting to
                            web-projects and software development, as well as marketing and promotion of products on the
                            <strong>IT-market</strong>. Promoting the absence of imposed stereotypes, we are ready to
                            create a project of any complexity, and go with you all the way from concept to release,
                            embodying the most daring and non-standard ideas! </p>
                    </div>

                    <a href="#page-form" class="button button--blue contact-button contact-button--nomob">Contact us</a>
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
            <h2 class="banner__title title wow fadeInLeftBig"><strong>From concept</strong><br>to release</h2>

            <div class="banner__text wow fadeInRightBig">
                <p><strong>We listen, advise and develop</strong> user-friendly, high-end <strong>IT products</strong>
                    for you.</p>

                <p>Thanks to our experience and teamwork, we have found a way to benefit our customers with maximum
                    efficiency.</p>
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

                            <p class="stages__title">Strategic analysis</p>

                            <p class="stages__text">
                                <strong>The result:</strong> a set of recommendations leading to the most effective
                                solution to the problem.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-2.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Technical planning and design</p>

                            <p class="stages__text">
                                <strong>The result:</strong> a set of technical solutions, a development and support
                                plan, a finished product design.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-3.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Product development</p>

                            <p class="stages__text">
                                <strong>The result:</strong> a ready-to-use product.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-4.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Marketing research, development of the product promotion plan</p>

                            <p class="stages__text">
                                <strong>The result:</strong> product promotion on the market.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-5.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Management, support, innovations</p>

                            <p class="stages__text">
                                <strong>The result:</strong> product development, development of innovations to maintain
                                maximum value of the product.
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
                            <h2><strong>Imagine a team</strong> that will empower your business.</h2>
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
                            <h2><strong>Imagine IT services</strong> that will accelerate your innovation.</h2>
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
                            <h2><strong>Imagine a trusted technical partner</strong> for all your IT needs.
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
            <h2 class="service__title title wow fadeInUp"><strong>Basic</strong> Services</h2>

            <ul class="service__list">
                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-1.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Technical consulting</h4>
                        <p>High-class assistance in choosing technological solutions necessary for your business.
                            Automation of business processes. Audit of your current software complexes.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-2.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Web-development</h4>
                        <p>We will develop for you custom design, web-projects of any complexity, from a “business card
                            site”, to the information portal. Web applications for your business online.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-3.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Custom software development</h4>
                        <p>Fast and efficient deployment of specialized solutions to meet the needs and capabilities of
                            your business.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-4.svg" alt="">
                    <div class="serv-card__text">
                        <h4>UX/UI design</h4>
                        <p>Creating designs for online products and interfaces with the highest level of comfort,
                            intuitiveness and efficiency for users of your product.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-5.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Cloud services</h4>
                        <p>Manage your data, analyze it, and get the results you need with the highest level of
                            efficiency and security with cloud solutions. Maximize the value of information, one of your
                            most important assets.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-6.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Information security</h4>
                        <p>It is impossible to overestimate the importance of security. Provide the maximum level of
                            security to the data used in your projects. Don't give unscrupulous competitors and other
                            intruders a chance.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-7.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Marketing</h4>
                        <p>New level marketing specialists will teach you how to position your product correctly in the
                            market. We will advise you and create the most adapted advertising products based on the
                            results of market analysis and your data to promote your company and increase your
                            sales.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-8.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Telemarketing</h4>
                        <p>Increase sales of your product or service with a telemarketing department. One of the most
                            effective ways to sell is directly over the phone. Find the most effective ways with the
                            help of our team and phone number databases. We can also help you design, set up and equip
                            your own sales force that can increase the number and effectiveness of your sales</p>
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

