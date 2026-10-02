<?php
/*
Template Name: Услуга 3.7 Английский
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
                        <li class="breadcrumbs__item">Marketing</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Online Marketing</h1>
                    <p>We are your trusted development and digital commerce partner.</p>
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
                                <h2>We work alongside your <strong> brand team</strong> as your development partner</h2>
                                <p>We have experience in developing high-impact strategies to maximize the profitability of your product.</p>

                                <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="banner banner--margin-top">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">A <strong>complete</strong> and versatile approach</h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>We work diligently throughout the project to create solutions that increase the visibility and value of your product.</p>
                </div>
            </div>
        </section>

        <section class="path">
            <div class="path__main-wrapper wrapper">
                <h2 class="path__title title wow fadeInUp">How we <strong>do it</strong></h2>
                <div class="path__list-container">
                    <div class="path__list-wrapper path__list-wrapper--tree swiper-container">
                        <ul class="path__list stages swiper-wrapper">
                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-30.svg" alt="">
                                </div>

                                <p class="stages__title">Research and analysis</p>

                                <p class="stages__text">The first step is to understand how to position your product in the marketplace. For this purpose, our researchers-analysts will study the market and prepare all necessary recommendations.</p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-31.svg" alt="">
                                </div>

                                <p class="stages__title">Design and optimization</p>

                                <p class="stages__text">
                                    Recognizable design is one of the most important factors in product promotion. Our designers will make a creative design that will become the calling card of your product or service. A specialist in SEO will bring your resource in the top lines of the most popular search engines, which will lead to an increase and conversion of traffic.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-32.svg" alt="">
                                </div>

                                <p class="stages__title">Creativity and imaginative</p>

                                <p class="stages__text">
                                    We help you create a sustainable competitive advantage with our creative team, based on data from analytics that will create brand identity, drive traffic and consumers.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-33.svg" alt="">
                                </div>

                                <p class="stages__title">Paid Media</p>

                                <p class="stages__text">
                                    Your future customers spend hours every day on platforms like Facebook, Instagram and Google - we'll meet them there with strategic targeting and deliver the information they need.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-34.svg" alt="">
                                </div>

                                <p class="stages__title">Email and SMS marketing</p>

                                <p class="stages__text">
                                    Our email, SMS, and messenger automation services nurture potential customers and drive retention.
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
                <h2 class="reception__title title wow fadeInUp"><strong>What you get</strong> as a result</h2>

                <div class="reception__text wow fadeInUp">
                    <ul>
                        <li>A complete market analysis and report on possible placement of your product.</li>
                        <li>Conclusions and advice on proper product positioning.</li>
                        <li>A step-by-step plan for advertising campaigns and promotions.</li>
                        <li>Technical actions for site optimization.</li>
                        <li>Other promotional activities such as placement on paid resources, work with social networks, messengers, various mailings of advertising information.</li>
                        <li>Continuous analysis of the profitability and success of your product on the market, making adjustments to marketing activities.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>