<?php
/*
Template Name: Услуга 3.3.6 Польский
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
                        <li class="breadcrumbs__item">Wsparcie</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title"><strong>Wsparcie</strong> i konserwacja</h1>
                    <p>Uzyskaj maksymalny spokój ducha dzięki naszemu zespołowi wsparcia i serwisu po wydaniu, a także nieograniczonej liczbie możliwych poprawek.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-6_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Wsparcie <strong>techniczne</strong> po wydaniu</h2>

                        <p>Uzyskaj wsparcie techniczne od zespołu ekspertów, którzy korzystają z aktualnych narzędzi i posiadają bogatą wiedzę, praktyczne doświadczenie i znają Twój produkt od początku do końca.</p>
                        <p>Usługa ta jest zazwyczaj świadczona oddzielnie po fazie wdrożenia oprogramowania, umożliwiając dalszy rozwój projektu poprzez żądanie aktualizacji funkcjonalności.</p>
                        <p>Oznacza to, że otrzymujesz osobisty zespół, który jest zawsze gotowy do pomocy, gdy tylko zaczniesz korzystać z opracowanego produktu. Częścią zadań wsparcia jest również upewnienie się, że wszelkie błędy odkryte w przyszłości zostaną naprawione.</p>

                        <a href="#page-form" class="button button--blue contact-button">Skontaktuj się z nami</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-6-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="reception reception--dark">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>Co otrzymujesz</strong> w rezultacie</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Nasza usługa wsparcia oznacza, że nasi inżynierowie oprogramowania są dostępni przez cały czas, aby pomóc Ci w rozwiązywaniu problemów i dopracować Twoje oprogramowanie w razie potrzeby. Korzyści z usługi wsparcia:</p>

                    <ul>
                        <li>Oprogramowanie jest na bieżąco aktualizowane.</li>
                        <li>Jesteśmy gotowi pomóc w każdym rozszerzeniu funkcjonalnym na życzenie.</li>
                        <li>Ciągłość biznesowa i minimalny czas reakcji na rozwiązywanie problemów.</li>
                        <li>Obniżone koszty - brak konieczności utrzymywania własnego zespołu wsparcia.</li>
                        <li>Wysokie standardy usług oparte na nowoczesnej metodologii.</li>
                        <li>Gwarantowany czas reakcji w przypadku wystąpienia problemów.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="techs">
            <div class="techs__wrapper wrapper">
                <h2 class="techs__title title wow fadeInUp"><strong>Narzędzia</strong>, których używamy</h2>

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