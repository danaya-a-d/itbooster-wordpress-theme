<?php
/*
Template Name: Услуга 3.6.1 Английский
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
                        <li class="breadcrumbs__item">Security Consulting</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Information <strong>Security</strong></h1>
                    <p>Make better business decisions, apply technology and improve the customer experience. Make sure your system is designed to meet current industry standards.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-1_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Empower <strong>your business</strong> and protect your most valuable asset - information</h2>

                        <p>Our team is well-positioned to create and deploy high-quality software that meets the highest information security standards. Manage your risks and improve your products with the help of our qualified cyber security experts.</p>

                        <a href="#page-form" class="button button--blue contact-button">Contact us</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-1-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Security is, first and foremost, <strong>experience</strong></h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>Security consulting is a set of measures aimed at maximum protection of your product in particular and your business in general.</p>
                    <p>Our specialists have many years of experience in combating hacking attempts, data theft and other methods of illegal influence. Thanks to this unique experience, at the early stages of product development they are able to analyze and predict its weaknesses and possible ways of unauthorized access to data, thus pre-empting intruders before the product is even implemented. By choosing us as your security partner, you will gain confidence and peace of mind knowing that your business is not at risk of sudden losses related to security bottlenecks.</p>
                </div>
            </div>
        </section>

        <section class="info info--no-margin">
            <div class="info__wrapper wrapper">
                <h2 class="info__title title">An up-to-date security system is <strong>the key to success</strong></h2>

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Impact on business processes</h4>
                            <p>Learn how to best protect your business with pre-modeling and threat assessment to avoid additional costs and losses. We will perform a full range of activities to identify weaknesses in your security system.</p>
                        </div>
                    </li>
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Levels of security</h4>
                            <p>Establish rules to ensure that your valuable assets are safeguarded and your business goals are met. Our experts will determine what level of security your business needs, and help you choose the right tools to achieve it.</p>
                        </div>
                    </li>
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Security in software products</h4>
                            <p>Find out the security requirements for your product and develop an implementation plan. We can help you develop the most effective security for your software suite, or improve the security in existing products.</p>
                        </div>
                    </li>
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Security audits</h4>
                            <p>Prepare your product for an audit. Our Ethical Hackers, or White Hats, will conduct a comprehensive audit to identify vulnerabilities in your cyber defenses. This step is necessary even if your security seems completely secure. As a result, you will get an accurate picture of the real level of security correspondence to the required one, which will help you develop a roadmap for upgrading your protection and put it into practice.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>What you get</strong> as a result</h2>

                <div class="reception__text wow fadeInUp">

                    <ul>
                        <li>Vulnerability analysis of your systems, bug fixes and threat mitigation recommendations.</li>
                        <li>Advice from security engineers accredited by industry-leading certifications.</li>
                        <li>Cost savings from data breaches, security breaches, or the purchase of unnecessary licenses for software that is ineffective or inappropriate for you.</li>
                        <li>Check for vulnerabilities in third-party components that may affect the security of your system as a whole.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>