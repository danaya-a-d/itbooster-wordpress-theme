<?php
/*
Template Name: О нас Английский
*/
?>

<?php $page_id = get_the_ID() ?>

<?php get_header() ?>

<main class="page-main">
    <section class="upper-block">
        <div class="upper-block__wrapper wrapper">
            <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                    <li class="breadcrumbs__item">About us</li>
                </ul>
            </div>

            <div class="upper-block__text wow fadeInUp">
                <h1 class="upper-block__title title">We are a global <strong>IT company</strong></h1>
                <p>We provide full range of services in IT-industry all over the world.</p>
            </div>
        </div>

        <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/head-photo-1.jpg" alt="">
    </section>

    <section class="about-us">
        <div class="about-us__wrapper wrapper">
            <h2 class="visually-hidden">О нас</h2>
            <div class="about-us__content">
                <div class="about-us__text about-us__text--top wow fadeInUp">
                    <p><strong>We are a young IT company</strong> registered in 2023, consisting of enthusiasts in their business. Despite our recent market entry, our employees are experienced specialists, each in their own field. Rich previous experience of development, participation in a large number of various projects gives us the confidence that our specialists with the highest quality and efficiency can perform the project of any complexity.</p>
                </div>

                <div class="about-us__text about-us__text--bottom wow fadeInUp">
                    <div>
                    <p>Restrictions, imposed by heads of many companies in IT-industry, do not allow their employees to develop and go beyond the corporate rules and regulations, which often affects the quality and capabilities of developed projects, pulling them back in technical terms. It is always easier to go the beaten path than to spend time exploring new ways. But that's of no interest to us.
                        We are a team of enthusiasts who gathered in one place in order to abolish all restrictions and rely only on our experience, intellect and creativity, going beyond the commonplace, habits and corporate rules. This allows us to look at the principles of development from an unconventional point of view, and we are ready to take any, even the most complex, task with individual needs and solve it as efficiently as possible. <strong>We are the inventors of new approaches and practices in IT services.</strong></p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
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
            <h2 class="banner__title title wow fadeInLeftBig">Our company's <strong>geography</strong></h2>
            <div class="banner__text wow fadeInRightBig">
                <p><strong>We are an international company</strong>, headquartered in Europe. We are headquartered in <strong>Warsaw, Poland</strong>. Nevertheless, we cooperate with companies and individuals worldwide.</p>
                <p>In addition, some of our employees work remotely, which enables us to flexibly set up our production processes and recruit additional production force for product development in situations of high workload with projects under development.</p>
            </div>
        </div>
    </section>

    <section class="path">
        <div class="path__main-wrapper wrapper">
            <h2 class="path__title title wow fadeInUp"><strong>Who we</strong> serve</h2>
            <div class="path__list-container">
                <div class="path__list-wrapper path__list-wrapper--tree swiper-container">
                    <ul class="path__list strategies swiper-wrapper">
                        <li class="strategies__item swiper-slide wow fadeInUp">
                            <div class="strategies__icon-block">
                                <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-1.svg" alt="">
                            </div>

                            <p class="strategies__title">Businesses</p>

                            <p class="strategies__text">
                                If you're the owner of a small or large business - we can help you to solve your tasks. Workplace automation systems, production software development, security systems modernization and development, cloud solutions for medium and large businesses - this is what we love and can do.
                            </p>
                        </li>

                        <li class="strategies__item swiper-slide wow fadeInUp">
                            <div class="strategies__icon-block">
                                <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-6.svg" alt="">
                            </div>

                            <p class="strategies__title">Software and web development companies</p>

                            <p class="strategies__text">
                                We can help you develop a marketing strategy, advertising campaign and bring your product to market.
                            </p>
                        </li>

                        <li class="strategies__item swiper-slide wow fadeInUp">
                            <div class="strategies__icon-block">
                                <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-7.svg" alt="">
                            </div>

                            <p class="strategies__title">Individual clients</p>

                            <p class="strategies__text">
                                Even for individual entrepreneurs and small businesses we can offer a full range of services in software development, marketing and project promotion on the web
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
            <h2 class="service__title title wow fadeInUp"><strong>Map</strong> of our services</h2>

            <ul class="service__list">
                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-1.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Consulting</h4>

                        <ul>
                            <li><a>Product strategy development.</a></li>
                            <li><a>Consulting in the sphere of software product engineering.</a></li>
                            <li><a>Audit of the existing systems and infrastructure.</a></li>
                            <li><a>Automation of business processes and manufacturing.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-2.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Web-development</h4>

                        <ul>
                            <li><a>Development of web portals of any complexity.</a></li>
                            <li><a>Development of all types of sites, from a landing page to the trading platform.</a></li>
                            <li><a>Web design</a></li>
                            <li><a>Web application development.</a></li>
                            <li><a>Support of web-projects.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-3.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Software development</h4>

                        <ul>
                            <li><a>Dedicated teams.</a></li>
                            <li><a>Custom software development.</a></li>
                            <li><a>Software design and architecture.</a></li>
                            <li><a>DevOps</a></li>
                            <li><a>Testing of our developed or existing software.</a></li>
                            <li><a>Support.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-4.svg" alt="">
                    <div class="serv-card__text">
                        <h4>UX / UI design</h4>

                        <ul>
                            <li><a>Web site design.</a></li>
                            <li><a>Development of design and user interfaces of software and web applications.</a></li>
                            <li><a>Corporate identity development and brand guidelines creation.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-5.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Cloud services</h4>

                        <ul>
                            <li><a>Consulting on cloud solutions.</a></li>
                            <li><a>Cloud solutions and migration.</a></li>
                            <li><a>Security consulting.</a></li>
                            <li><a>Comprehensive data protection solutions.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-6.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Information security</h4>

                        <ul>
                            <li><a>Consultation and analysis of existing security systems.</a></li>
                            <li><a>Modernization and updating of data protection in existing systems.</a></li>
                            <li><a>Enterprise security testing (white-hatting).</a></li>
                            <li><a>Development and implementation of security systems for companies and enterprises.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-7.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Marketing</h4>

                        <ul>
                            <li><a>Market analysis and evaluation of product profitability.</a></li>
                            <li><a>Marketing research.</a></li>
                            <li><a>Development of image and advertising campaigns.</a></li>
                            <li><a>Development of marketing activities, promotion of goods in the market.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-8.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Telemarketing</h4>

                        <ul>
                            <li><a>Telemarketing services, promotion of products and services.</a></li>
                            <li><a>Creation and organization of telemarketing department in your company.</a></li>
                            <li><a>Creation of software products, equipment and setup of telemarketing departments.</a></li>
                            <li><a>Control, upgrade and support of telemarketing departments.</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="using-tech">
        <div class="using-tech__wrapper wrapper">
            <h2 class="using-tech__title title wow fadeInUp"><strong>Technologies</strong> used</h2>

            <ul class="using-tech__nav-list wow fadeInUp">
                <li class="using-tech__nav-item active"><span>Back-end and programming languages</span></li>
                <li class="using-tech__nav-item"><span>Interface languages and frameworks</span></li>
                <li class="using-tech__nav-item"><span>DevOps: containerization, automation, monitoring</span></li>
                <li class="using-tech__nav-item"><span>Databases</span></li>
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


