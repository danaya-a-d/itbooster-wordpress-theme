<?php
/*
Template Name: Услуга 3.5.2 Английский
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
                        <li class="breadcrumbs__item"><a>Cloud services</a></li>
                        <li class="breadcrumbs__item">Cloud solutions and migration</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Cloud solutions and <strong>migration</strong></h1>
                    <p>Keep your systems running smoothly to achieve your main goals.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-5-2_1.jpg"
                 alt="">
        </section>

        <section class="team">
            <div class="team__wrapper wrapper">
                <ul class="team__list team-slider">
                    <li class="team-slider__item">
                        <img class="team-slider__image wow animLeft" src="<?php echo get_template_directory_uri() ?>/assets/img/3-5-2-blok-1.jpg" alt="">
                        <div class="team-slider__text-block wow animRight">
                            <div class="team-slider__text">
                                <h2>Cloud <strong>is the best solution</strong> for most companies</h2>
                                <p>Feel and use the great potential of the cloud by upgrading and optimizing your current local infrastructure.  Using our experience and expertise, we take a comprehensive approach to migration and data transfer that will allow your company to complete all the steps necessary to migrate safely to CloudNative.</p>

                                <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="info">
            <div class="info__wrapper wrapper">
                <h2 class="info__title title">Cloud <strong>Migration</strong> Scheme</h2>
                <p class="info__about">We have developed a convenient, proven scheme consisting of several thoughtful steps that will make the migration quick and painless. </p>

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Step 1: Analysis</h4>
                            <p>Analysis of tasks and requirements -> Analysis of commercial and technical resources -> Determination of volume and type of data to be migrated -> Determination of migration timeline -> Formation of a team of specialists.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Step 2: Planning </h4>
                            <p>Selection of a suitable cloud architecture -> Selection of cloud provider -> Calculation of solution cost -> Development of migration strategy -> Considering risks -> Selection of migration type (gradual or full) -> Create migration plan</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Step 3: Migration</h4>
                            <p>Installation and configuration of services -> Service launch and testing -> Data migration -> Problem solving -> Optimization</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Step 4: Support </h4>
                            <p>Expanding the features and functionality of your cloud solution -> Support and Upgrade -> Scaling up</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Why <strong>move</strong> to the cloud with us</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Migrating to the cloud will give you many benefits, including improved scalability, manageability and security. By migrating with us, you can multiply these benefits. What you get:</p>

                    <ul>
                        <li>Comprehensive support from certified experts.</li>
                        <li>A proven cloud platform utilizing all relevant technologies.</li>
                        <li>Support in business process analysis, DevOps, CloudOps, DataSolutions, and security.</li>
                        <li>Confidence in decision-making as they will be based on the knowledge gained through analysis of business processes, costs, risks, advantages and disadvantages of all possible cloud solutions.</li>
                        <li>Access to a wide range of opportunities for additional projects.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>