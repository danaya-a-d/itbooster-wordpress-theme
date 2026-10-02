<?php
/*
Template Name: Услуга 3.6.3 Английский
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
                        <li class="breadcrumbs__item"><a>Information security</a></li>
                        <li class="breadcrumbs__item">Modernization and support of security systems</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Modernization and support<br>of <strong>security systems</strong></h1>
                    <p>Any, even the most advanced system sooner or later becomes unsafe.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-3_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Continuous monitoring of cyber-security is the <strong>key to its reliability</strong></h2>

                        <p>As the experts say, “If your system has never been hacked, it doesn't mean it's completely stable. It just means you haven't been taken seriously yet”.</p>
                        <p>Even the most resistant to hacking and threats protection system loses its relevance over time due to finding a variety of "holes" in various operating systems, hardware and other software, the emergence of new ways of hacking and vulnerabilities. To keep the protection system up-to-date, you need to constantly monitor and update it, and in some cases it needs to be seriously upgraded or even completely replaced.</p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-3-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Old <strong>tools are blind</strong> to new threats</h2>

                <div class="banner__text wow fadeInRightBig">
                    <div>
                        <p>You can't predict an attack by looking at yesterday's threats. Prevent, detect and respond to threats with timely updates to your security system. Our security experts can help you:<p>
                        <ul>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Assess the reliability and relevance of your defenses.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Analyze the adequacy and security awareness of your employees.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Upgrade and update tools.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                РDesign and create a new solution to run your business
                                securely.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Test and audit, identifying any weaknesses or possible threats.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>What you will get as </strong>a result</h2>

                <div class="reception__text wow fadeInUp">
                    <ul>
                        <li>Analysis and study of your current security related infrastructure.</li>
                        <li>Findings from a team of experts identifying weaknesses, security holes, and likely threats.</li>
                        <li>Development of a remediation roadmap with performance and cost estimates.</li>
                        <li>Updating, configuring the system, and replacing the software.</li>
                        <li>Recommendations on the development of a new security system in case modification of the existing one is not feasible.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>