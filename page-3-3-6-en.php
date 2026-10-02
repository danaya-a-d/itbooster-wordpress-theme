<?php
/*
Template Name: Услуга 3.3.6 Английский
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
                        <li class="breadcrumbs__item">Support</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title"><strong>Support and </strong>maintenance</h1>
                    <p>Get maximum peace of mind with our post-release support and maintenance team, as well as an unlimited number of possible fixes.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-6_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Technical <strong>support</strong> after the release</h2>

                        <p>Get technical support from a team of specialists who use up-to-date tools and have a wide range of knowledge, practical experience and know your product from start to finish.</p>
                        <p>This service is usually provided separately after the software product implementation stage, making it possible to further develop the project by requesting functionality updates.</p>
                        <p>This means that you get a personal team, which is always ready to help you after you have started using the developed product. The scope of the support tasks also includes guaranteed correction of possible errors found in the future.</p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-6-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="reception reception--dark">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>What you get</strong> as a result</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Support service means that our software engineers are available at any time to help solve problems and to modify your software according to additional requests. The benefits of the support service:</p>

                    <ul>
                        <li>The software is constantly being updated.</li>
                        <li>We're ready to help you with any functional extension on request.</li>
                        <li>Continuity of business processes and minimal response time to troubleshooting.</li>
                        <li>Reduced costs - no need to maintain your own support team.</li>
                        <li>High standards of service based on modern methodology.</li>
                        <li>Guaranteed response time to arising problems.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="techs">
            <div class="techs__wrapper wrapper">
                <h2 class="techs__title title wow fadeInUp"><strong>The tools</strong> we use</h2>

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