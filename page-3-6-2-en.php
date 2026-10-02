<?php
/*
Template Name: Услуга 3.6.2 Английский
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
                        <li class="breadcrumbs__item">Comprehensive data protection solutions</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Comprehensive <strong>data protection</strong> solutions</h1>
                    <p>Take a broad look at the security problem.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-2_1.jpg"
                 alt="">
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">Security is a <strong>complex measure</strong> involving many aspects</h2>
                            <p>Data in any business is a product of the highest value. The problem of your business security is not only the resistance to hacking of a certain product, server or premises.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>It is a complex problem, which, among other things, includes certain rules of conduct and interaction of staff, the use of secure tools, current protection against a variety of threats, the culture of use of software products, equipment and other similar aspects. It is not enough to focus only on cyber protection from external threats, it is also necessary to pay attention to possible internal leaks.</p>

                            <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-2-blok-1-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-2-blok-1-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="info info--no-margin">
            <div class="info__wrapper wrapper">
                <h2 class="info__title title">What <strong>needs to be done</strong> to improve safety</h2>

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>A culture of use and collaboration</h4>
                            <p>Make sure your staff understand the principles of secure data use. Our cybersecurity engineers will give lectures and seminars to your employees.</p>
                        </div>
                    </li>
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Local security policies</h4>
                            <p>Audit every workstation and terminal. We'll audit and make the appropriate settings on workstations, minimizing or eliminating the possible impact of human error.</p>
                        </div>
                    </li>
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Development of specialized software</h4>
                            <p>Rest assured that all measures have been taken. Attackers do not sleep and are 24/7 looking for opportunities to illegally access and steal data storages. We'll create a software package for you or help you upgrade your existing one to meet the highest security standards.</p>
                        </div>
                    </li>
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Audit of existing products</h4>
                            <p>Our hacking experts, so-called "white hackers", will find all vulnerabilities and weak points, and system administrators will fix the settings of your software and network equipment to obtain the necessary protection.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Constant monitoring of the situation</h4>
                            <p>Our security engineers study on a daily basis the situations in which the intruders penetrate into protected environments, as well as the new trends in security. Thus, we always keep our finger on the pulse of current trends and technologies. This constant monitoring allows us to upgrade or reconfigure your system in the shortest possible time, which will also help avoid the situation when your system is outdated and cannot provide an adequate level of protection.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Cloud solutions</h4>
                            <p>One of the major solutions for improving the protection of your business is cloud solutions. A pre-built, tested and constantly modified storage environment for your data will give you peace of mind, the ability to turn your attention to the important stuff instead of worrying about valuable data. In many cases, migrating to the cloud will increase your ability to protect your products and valuables many times over, while also reducing or eliminating the possibility of human error altogether.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Stop at what's <strong>important</strong></h2>

                        <p>We will be a reliable partner for you and your business, providing all the proper security measures for your systems and data. We will go hand in hand with you all the way from analysis and audit, through modernization to the development of a comprehensive all-inclusive security system. Your peace of mind is our main goal.</p>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-2-blok-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>