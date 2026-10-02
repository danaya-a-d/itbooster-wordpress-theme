<?php
/*
Template Name: Услуга 3.8 Английский
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
                        <li class="breadcrumbs__item">Telemarketing</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Telemarketing</h1>
                    <p><strong>Be on the cusp of innovation</strong>. Telemarketing is the most popular and modern way to market your products.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-8_1.jpg"
                 alt="">
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">Build <strong>healthy customer relationships</strong> with telemarketing services</h2>
                            <p>Telemarketing is one of the most popular and dynamic marketing strategies. This direct approach can be referred to as a "word of mouth" method, which helps spread the word about a product or service to a target audience. Telemarketing services act as an extension of your business, generating lively interest in potential customers to make new purchases of products or services.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>Effective telemarketing services help increase sales. Providing telemarketing services requires experience, and it's often difficult to handle in-house. That's why most companies resort to a better alternative - investing in outsourced telemarketing services.</p>

                            <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-8-blok-1-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-8-blok-1-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">How we can <strong>help</strong>&nbsp;you</h2>

                <div class="banner__text wow fadeInRightBig">
                    <div>
                        <ul>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Research your product or service.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                We'll study your strengths and weaknesses to understand ways and options for positioning your product.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                We will develop a strategy for communicating with customers and presenting your product or service in the most beneficial way.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Use our or your database of telephone numbers of your potential customers to contact them.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                We will provide you with professional staff from our call center to run your marketing campaign in the most effective way.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="team">
            <div class="team__wrapper wrapper">
                <ul class="team__list team-slider">
                    <li class="team-slider__item">
                        <img class="team-slider__image wow animLeft" src="<?php echo get_template_directory_uri() ?>/assets/img/3-8-blok-2.jpg" alt="">
                        <div class="team-slider__text-block wow animRight">
                            <div class="team-slider__text">
                                <h2><strong>Telemarketing</strong> as part of your business</h2>
                                <p>In some cases, when your company is large enough to require telemarketing services on a daily basis, you may find it beneficial to invest in your own telemarketing department. Setting up such a structure is not an easy thing to do. We have the technical, organizational and professional resources to set up a telemarketing department for your company.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">We offer you a <strong>full range of services</strong> for creating a telemarketing department</h2>

                <div class="reception__text wow fadeInUp">
                    <ul>
                        <li>Consultation and analysis, which will give you a qualitative and quantitative assessment of the project.</li>
                        <li>We will technically equip workstations for your employees and set up the necessary software.</li>
                        <li>We will develop and implement the software necessary for telemarketing department with subsequent support and upgrades.</li>
                        <li>We will hire and train your staff.</li>
                        <li>Periodically we will hold lectures and seminars to improve staff skills.</li>
                        <li>We will develop a marketing strategy to promote your products and services.</li>
                        <li>We will allocate a specialist to supervise the department, which will monitor and adjust the model of behavior and communication of staff with potential customers throughout the work.</li>
                        <li><strong>With our help, creating a telemarketing department from a complex set of problems will become an easy task for you and your organization.</strong></li>
                    </ul>

                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>