<?php
/*
Template Name: Услуга 3.5.1 Английский
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
                        <li class="breadcrumbs__item">Cloud consulting</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Cloud <strong>consulting</strong></h1>
                    <p>Ensure systems run smoothly to achieve business goals.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-5-1_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">What we <strong>offer</strong></h2>

                        <p>No matter what stage you are at in moving your project to the cloud, we will advise you and help you find the best option to complete the process successfully. We will analyze the needs, necessary costs, design, optimize or upgrade your cloud solution and migrate your business to the cloud.</p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-5-1-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="info">
            <div class="info__wrapper wrapper">

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Cloud solution configuration analysis</h4>
                            <p>A specialist consultant will identify your needs in order to select the necessary cloud parameters that are best suited to your case. He will recommend the best cloud provider, assess potential issues and risks as well as specific benefits applicable to your situation.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Risk and security analysis</h4>
                            <p>Large cloud providers follow the highest standards of system security. However, the human factor always remains the weak point. We have thought of everything and know how to use adequate local policies and rules in order to create a cloud project of the highest security class.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Cloud solution design and development</h4>
                            <p>We will design and implement a cloud solution with the approach that best suits you. We choose the optimal cloud model, from simple turnkey solutions (SaaS and PaaS) to infrastructure solutions (IaaS) with full operating system access on dedicated virtual servers. Choose what best suits your business model.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Migrating to the cloud</h4>
                            <p>This is not an easy task, often involving a huge amount of
                                inputs and nuances that need to be taken into account to successfully complete the migration process. By supplementing your team with our experienced experts, you can solve all of these problems. You'll get a roadmap from us with a precise action plan that we can use to make the transition from on-premises to the cloud.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>CloudOps consulting and services</h4>
                            <p>We will create a cloud infrastructure architecture that will optimize costs, increase productivity, reduce the risk of incidents and the likelihood of irretrievable data loss. Even in the most extreme case, the system and lost data can be recovered in the shortest possible time, as data is reliably and repeatedly backed up. We can also help you assess the profitability of your cloud investments.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Why <strong>work</strong> with cloud solutions</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Numerous researches of cloud solutions on the Internet have shown that adequate results require properly and finely tuned services, as well as enough experience to avoid loss of finances, time and data. A smooth and profitable migration to the cloud requires an experienced partner who is ready to support you. This solution will help you:</p>

                    <ul>
                        <li>Take advantage of the benefits of the cloud, such as increased security, the ability to scale as your business grows, flexibility in organizing workflows, shortening time-to-market products, using the latest technologies.</li>
                        <li>Make the right decisions throughout the migration.</li>
                        <li>Give employees a better understanding of how to manage cloud solutions within the company.</li>
                        <li>Learn how to make the most of the cloud in all business processes here and now, as well as in the future.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>