<?php
/*
Template Name: Услуга 3.3.3 Английский
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
                        <li class="breadcrumbs__item">Software design and architecture</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title"><strong>Software</strong> design and architecture</h1>
                    <p>Ensure that the components of your system work together effectively to meet business objectives.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title"><strong>Well-designed</strong> and adequately engineered software</h2>

                        <p>We practice a holistic approach and work with a comprehensive solution architecture. </p>
                        <p>We help you every step of the way, from gathering information and project requirements to implementing and deploying your product, whether new or existing.</p>
                        <p>We provide all the tools and data you need to make the right decisions.</p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">What is <strong>architecture</strong></h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>Architecture is not an end product, but a process in which specialists from a variety of industries work hand in hand. They are competent in many areas, including business analysis, cloud solutions, microservices, Big Data, etc. By conducting a comprehensive analysis, we ensure that your product will perform flawlessly and meet your business goals.</p>
                </div>
            </div>
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">What you will <strong>get</strong></h2>
                            <p>First of all - the basis, the skeleton of the planned product, the principles of work, internal and external interactions. For us, project architecture is not a separate service, but part of a broader ecosystem.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>Project architects work closely with software engineers, business analysts, software quality assurance and security specialists to ensure that the software and its components work smoothly in the future.</p>
                            <p>As a result, the final product does its job well, and is secure, maintainable, and scalable.</p>
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