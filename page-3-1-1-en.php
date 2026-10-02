<?php
/*
Template Name: Услуга 3.1.1 Английский
*/
?>

<?php get_header() ?>

    <main class="page-main">
        <section class="upper-block">
            <div class="upper-block__wrapper wrapper">
                <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li class="breadcrumbs__item"><a>Services</a></li>
                        <li class="breadcrumbs__item"><a>Consulting</a></li>
                        <li class="breadcrumbs__item">Product strategy</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Product <strong>Strategy</strong></h1>
                    <p>Gather information, analyze data to determine your product's place in the market, with your goals in mind.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-1-1_1.jpg" alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <p><strong>A product strategy is an</strong> action plan to increase your product's recognition, visibility and, as a result, sales.</p>
                        <p>We, as your strategic partner, provide you with everything you need to create a coherent strategy, from analysis and research of the market, demand, competitors to a concrete action plan for the development and promotion of your product. We will be your advisors and responsible consultants, focused on maximizing the value of your product.</p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-1-1-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="path">
            <div class="path__main-wrapper wrapper">
                <h2 class="path__title title wow fadeInUp"><strong>Form</strong> your vision</h2>
                <div class="path__list-container">
                    <div class="path__list-wrapper swiper-container">
                        <ul class="path__list strategies swiper-wrapper">
                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-9.svg" alt="">
                                </div>

                                <p class="strategies__title">Strategy consulting</p>

                                <p class="strategies__text">
                                    Manage your product development at the earliest stages based on data, not intuition. Meet your needs with our expertise.
                                </p>
                            </li>

                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-8.svg" alt="">
                                </div>

                                <p class="strategies__title">Market research</p>

                                <p class="strategies__text">
                                    Use information gathered and processed by our analysts. Make informed decisions based on the data.
                                </p>
                            </li>

                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-11.svg" alt="">
                                </div>

                                <p class="strategies__title">Product development</p>

                                <p class="strategies__text">
                                    We'll give you all the help you need throughout all phases of product development, from research to implementation.
                                </p>
                            </li>

                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-10.svg" alt="">
                                </div>

                                <p class="strategies__title">ROI evaluation</p>

                                <p class="strategies__text">
                                    Ensure your product is developed with cost-effectiveness in mind. Protect and maximize your investment. Our team of specialists will help you analyze and forecast your product's ROI.
                                </p>
                            </li>

                            <li class="strategies__item swiper-slide wow fadeInUp">
                                <div class="strategies__icon-block">
                                    <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-12.svg" alt="">
                                </div>

                                <p class="strategies__title">Your product growth strategy</p>

                                <p class="strategies__text">
                                    Evaluate and adapt your product to growing demands and needs. Explore the needs of your potential customers with our experts.  We'll help you find the best growth strategy for you and develop a scalable product or service.
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
                <h2 class="reception__title title wow fadeInUp"><strong>What you'll get</strong> as a result</h2>

                <div class="reception__text wow fadeInUp">
                    <ul>
                        <li>An action plan and recommendations for the development of your product.</li>
                        <li>A quick definition of your goals and objectives, key economic and strategic indicators.</li>
                        <li>Recommendations that guarantee the maximum value of your product.</li>
                        <li>A high probability of success of your product in the market because its promotion is based on data analysis rather than intuition.</li>
                        <li>A personal advisor who becomes your personal assistant in all matters.</li>
                        <li>Promotion, development and adaptation of the product in a constantly changing competitive environment.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>