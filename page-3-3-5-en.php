<?php
/*
Template Name: Услуга 3.3.5 Английский
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
                        <li class="breadcrumbs__item">Testing</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Software <strong>testing</strong></h1>
                    <p>Testing is one of the most important steps before the release of your product.</p>
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
                            <h2 class="about-us__title title">Why <strong>testing</strong> is necessary</h2>
                            <p>Does your software work correctly? Is the interface convenient and easy to use? Does the application or service adequately perform the tasks that were set for it? Our team of testers can answer these questions.</p>
                            <p>No one is completely immune to possible errors. Even industry monsters like Goggle, Microsoft, Intel, AMD, Nvidia and others with a huge staff of high-level specialists are not immune to errors and human factor and periodically release different "patches" and updates for their software.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>Testing is the last frontier before a project enters the release phase. To confirm the high quality of a released product, it must be thoroughly tested to identify bugs and inaccuracies, and to determine the degree of usability and intuitiveness of the interface.</p>
                            <a href="#page-form" class="button button--blue contact-button">Contact us</a>
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
                <h2 class="banner__title title wow fadeInLeftBig">How it <strong>works</strong></h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>The development team after releasing a preliminary version of the product passes it to testers who use the product for a certain period of time as ordinary users or employees, checking the usability as well as all built-in features for subsequent journaling of problems and sending the software for revision.</p>
                </div>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Stages of product <strong>testing</strong> </h2>

                <div class="reception__text wow fadeInUp">

                    <ul>
                        <li>The transfer of the product to the testing team, a preliminary study of the functionality and features.</li>
                        <li>User interface analysis and assessment, report generation and quality assessment.</li>
                        <li>Functionality and feature testing.</li>
                        <li>Generating reports on bugs encountered and sending in information about necessary bug fixes.</li>
                        <li>Final testing of the product after making corrections.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Make sure that your product <strong>will be flawless</strong> at the time of release</h2>

                        <p>There is no doubt that the first impression of a product forms the opinion of the product. If a product goes to release "raw" and unfinished, then even after making corrections, rumors of poor quality can haunt it for a long time, which will have an extremely negative impact on its reputation. Therefore, it is extremely important that software is released in flawless form only after it has been thoroughly tested and all necessary changes and revisions have been made. This approach to software development is a common practice for us. We do our best to make sure you are satisfied with our work, and that your reputation remains infallible, guaranteeing the highest quality and value for your product.</p>
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