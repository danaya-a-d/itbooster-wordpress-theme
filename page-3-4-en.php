<?php
/*
Template Name: Услуга 3.4 Ангийский
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
                        <li class="breadcrumbs__item">UX/UI design</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Use <strong>quality design</strong> in your products</h1>
                    <p>Design is not only the appearance of your website or software product, but also the convenience, functionality and intuitiveness of its interface.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-4_1.jpg"
                 alt="">
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">UX/UI <strong>design</strong></h2>
                            <p>There is an area of design aimed at improving the interaction of staff or users with the software. Improving manageability, reducing the time spent on daily routine work.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>This is the domain of UX/UI designers. What can be worse than an uncomfortable annoying interface? To make the initial learning to use your product, as well as its daily use, comfortable and enjoyable, our designers will make it as intuitive, comfortable and easy as possible. This will save training time and simplify workflows. We develop the user interface (UI - User Interface), taking into account all the difficulties, nuances and shortcomings previously discovered, based on the user experience (UX - User eXpirience).</p>

                            <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-4-blok-1-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-4-blok-1-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="reception reception--dark">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">How we <strong>develop UX/UI</strong> design</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Providing a full range of design services, we create not just beautiful but also functional applications. The design process consists of the following steps:</p>

                    <ul>
                        <li>We study your needs, wants, and operating principles to understand your product goals and the expectations of your potential customers.</li>
                        <li>We use modern tools and study market trends and current trends in visual design to develop an attractive and functional interface.</li>
                        <li>We refine, test and control the process of creating the design from idea to implementation, which will allow you to achieve your goals with maximum efficiency.</li>
                        <li>As a result you will get an interface for your product which is visually attractive, functional, convenient and easy to use. We know that an intuitive and easy to learn interface will be convenient for potential customers and employees of your company.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="info info--no-margin">
            <div class="info__wrapper wrapper">
                <h2 class="info__title title"><strong>Stages of design</strong>, development and implementation of UX/UI design</h2>

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Preliminary consultations, study of the wishes, requirements and previous experience in use.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Research and analysis of the market and current trends.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Creation of architecture and visual design elements.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Wireframe creation  and testing.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Overall visual design and interactions.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Implementation.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="discuss discuss--no-margin">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>