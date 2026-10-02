<?php
/*
Template Name: Услуга 3.3.2 Английский
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
                        <li class="breadcrumbs__item"><a>Software Development</a></li>
                        <li class="breadcrumbs__item">Custom software development</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Custom <strong>Software Development</strong></h1>
                    <p>Get software development from highly qualified experts in the field.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-2-2_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Everything you need - <br><strong>in one place</strong></h2>

                        <p>We have our finger on the pulse of current technologies in the world of IT. Our developers do not stop the learning process even for a day, constantly expanding their knowledge area, and closely following all the innovations in technical solutions. This allows us to guarantee the highest quality of developed products. Everything new and progressive that is used in software development, we can and will use in your project.</p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-2-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__wrapper wrapper">
                <h2 class="knowledge__title title wow fadeInUp"><strong>We can help you</strong> solve the following problems</h2>

                <ul class="knowledge__list fields wow fadeInUp">
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">Business analysis</p>
                    </li>
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">Software architecture</p>
                    </li>
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">Software engineering</p>
                    </li>
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">Data security</p>
                    </li>
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">Cloud solutions</p>
                    </li>
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">UX/UI design</p>
                    </li>
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">DevOps</p>
                    </li>
                    <li class="fields__item">
                        <img class="fields__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                        <p class="fields__text">AI and machine learning</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="techs">
            <div class="techs__wrapper wrapper">
                <h2 class="techs__title title wow fadeInUp"><strong>Technologies</strong> we use</h2>

                <ul class="techs__list wow fadeInUp">
                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-2.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-13.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-7.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-3.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-4.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-8.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-12.png" alt="">
                    </li>

                    <li class="techs__item technique">
                        <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-1.png" alt="">
                    </li>
                </ul>
            </div>
        </section>

        <section class="path">
            <div class="path__main-wrapper wrapper">
                <h2 class="path__title title wow fadeInUp">The path from concept <strong>to release</strong></h2>
                <div class="path__list-container">
                    <div class="path__list-wrapper swiper-container">
                        <ul class="path__list stages swiper-wrapper">
                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-1.svg" alt="">
                                </div>

                                <p class="stages__title">Strategic analysis</p>

                                <p class="stages__text">
                                    <strong>The result:</strong> a set of recommendations leading to the most effective solution to the problem.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-2.svg" alt="">
                                </div>

                                <p class="stages__title">Technical planning and design</p>

                                <p class="stages__text">
                                    <strong>Result:</strong> a set of technical solutions, a development and support plan, the finished product design.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-3.svg" alt="">
                                </div>

                                <p class="stages__title">Product development</p>

                                <p class="stages__text">
                                    <strong>Result:</strong> a ready-to-use product.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-4.svg" alt="">
                                </div>

                                <p class="stages__title">Marketing research, development of the product promotion plan</p>

                                <p class="stages__text">
                                    <strong>Result:</strong> product promotion on the market.
                                </p>
                            </li>

                            <li class="stages__item swiper-slide wow fadeInUp">
                                <div class="stages__icon-block">
                                    <img class="stages__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-5.svg" alt="">
                                </div>

                                <p class="stages__title">Management, support, innovations</p>

                                <p class="stages__text">
                                    <strong>Result:</strong> product development, development of innovations for continuous promotion of the product in the market.
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
                <h2 class="reception__title title wow fadeInUp">What <strong>you get</strong></h2>

                <div class="reception__text wow fadeInUp">
                    <p>The final result of our cooperation is high quality software, maximally adapted to your requirements, business principles and users. We will achieve the best result together because:</p>

                    <ul>
                        <li>We will conduct an expert assessment and consultation on the architecture of the product to be created, current technologies and modern principles of software development.</li>
                        <li>We will assemble a flexible, tailored team of the best experts in their fields to your solution and requirements.</li>
                        <li>We will take care of a integrated, complete approach to the process of designing and developing your product.</li>
                        <li>We will take into account and comply with all your requirements and nuances.</li>
                        <li>We provide control and testing of the software.</li>
                        <li>We study possible risks and problems, in order to counteract their effects.</li>
                        <li>We will analyze the possibility of getting the product to market as quickly as possible.</li>
                        <li>Develop a strategy and marketing plan to maximize results.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>