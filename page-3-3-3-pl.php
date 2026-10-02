<?php
/*
Template Name: Услуга 3.3.3 Польский
*/
?>

<?php get_header() ?>

    <main class="page-main">
        <section class="upper-block">
            <div class="upper-block__wrapper wrapper">
                <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="<?php echo get_home_url(); ?>">Strona główna</a></li>
                        <li class="breadcrumbs__item"><a>Usługi</a></li>
                        <li class="breadcrumbs__item"><a>Rozwój oprogramowania</a></li>
                        <li class="breadcrumbs__item">Projektowanie i architektura oprogramowania</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Projektowanie i architektura <strong>oprogramowania</strong></h1>
                    <p>Zapewnij, że komponenty Twojego systemu będą efektywnie współpracować, aby spełnić Twoje cele biznesowe.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title"><strong>Dobrze zaprojektowane</strong> i odpowiednio skonstruowane oprogramowanie</h2>

                        <p>Praktykujemy podejście holistyczne i pracujemy w oparciu o kompleksową architekturę rozwiązań.</p>
                        <p>Pomagamy Ci na każdym kroku, od zbierania informacji i wymagań projektowych, po wdrożenie i implementację Twojego produktu, czy to nowego, czy istniejącego.</p>
                        <p>Zapewnimy wszystkie narzędzia i dane, których potrzebujesz, aby podjąć właściwe decyzje.</p>

                        <a href="#page-form" class="button button--blue contact-button">Skontaktuj się z nami</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Czym jest <strong>architektura</strong></h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>Architektura to nie produkt końcowy, ale proces, w którym ramię w ramię pracują eksperci z różnych branż. Posiadają oni kompetencje w wielu obszarach, w tym w zakresie analizy biznesowej, rozwiązań chmurowych, mikroserwisów, Big Data itp. Przeprowadzając kompleksową analizę, zapewniamy, że Twój produkt działa bezbłędnie i spełnia Twoje cele biznesowe.</p>
                </div>
            </div>
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">Co <strong>otrzymasz</strong></h2>
                            <p>Przede wszystkim podstawy, szkielet planowanego produktu, zasady działania, interakcje wewnętrzne i zewnętrzne. Dla nas architektura projektu nie jest osobną usługą, ale częścią szerszego ekosystemu.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>Architekci projektu ściśle współpracują z inżynierami oprogramowania, analitykami biznesowymi, specjalistami od zapewnienia jakości oprogramowania i bezpieczeństwa, aby zapewnić sprawne działanie oprogramowania i jego komponentów w przyszłości.</p>
                            <p>W rezultacie produkt końcowy dobrze wykonuje swoją pracę, jest bezpieczny, możliwy do utrzymania i skalowalny.</p>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3-blok-3-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-3-blok-3-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="discuss discuss--no-margin">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>