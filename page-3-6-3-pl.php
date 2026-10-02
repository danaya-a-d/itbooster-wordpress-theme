<?php
/*
Template Name: Услуга 3.6.3 Польский
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
                        <li class="breadcrumbs__item"><a>Bezpieczeństwo informacji</a></li>
                        <li class="breadcrumbs__item">Modernizacja i utrzymanie systemów bezpieczeństwa</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Modernizacja i utrzymanie<br><strong>systemów bezpieczeństwa</strong></h1>
                    <p>Prędzej czy później każdy, nawet najbardziej nowoczesny system, stanie się niebezpieczny.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-3_1.jpg"
                 alt="">
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Stałe monitorowanie cyberbezpieczeństwa jest <strong>kluczem do jego niezawodności</strong></h2>

                        <p>Jak mówią eksperci: "To, że Twój system nigdy nie został zhakowany, nie oznacza, że jest całkowicie odporny. Oznacza to tylko, że nie zostałeś jeszcze potraktowany poważnie.</p>
                        <p>Nawet najbardziej odporny system zabezpieczeń z czasem traci na znaczeniu, ponieważ w różnych systemach operacyjnych, sprzęcie i innym oprogramowaniu znajdowane są luki, a także pojawiają się nowe techniki hakerskie i luki. Utrzymanie aktualnej ochrony wymaga ciągłego monitorowania i aktualizacji, a w niektórych przypadkach poważnej aktualizacji lub nawet całkowitej wymiany.</p>

                        <a href="#page-form" class="button button--blue contact-button">Skontaktuj się z nami</a>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-6-3-blok-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Stare <strong>narzędzia są ślepe</strong> na nowe zagrożenia</h2>

                <div class="banner__text wow fadeInRightBig">
                    <div>
                        <p>Nie można przewidzieć ataku, patrząc na wczorajsze zagrożenia. Zapobiegaj, wykrywaj i reaguj na zagrożenia, aktualizując swój system zabezpieczeń. Nasi specjaliści ds. bezpieczeństwa mogą pomóc Ci:<p>
                        <ul>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Ocenić niezawodność i adekwatność Twoich zabezpieczeń.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Dokonać przeglądu adekwatności i świadomości bezpieczeństwa swoich pracowników.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Ulepszyć i zaktualizować narzędzia.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Zaprojektować i zbudować nowe rozwiązanie do bezpiecznego prowadzenia biznesu.
                            </li>
                            <li>
                                <img class="banner__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/fields-icon.svg" alt="">
                                Testuj i audytuj, identyfikując wszelkie słabości i ewentualne zagrożenia.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp"><strong>Co otrzymasz</strong> w wyniku</h2>

                <div class="reception__text wow fadeInUp">
                    <ul>
                        <li>Analizę i badanie obecnej infrastruktury związanej z bezpieczeństwem.</li>
                        <li>Wyniki pracy zespołu specjalistów, identyfikujące słabości, luki w zabezpieczeniach i prawdopodobne zagrożenia.</li>
                        <li>Plan działań naprawczych z szacunkami dotyczącymi wydajności i kosztów.</li>
                        <li>Aktualizacje, konfiguracja systemu i wymiana oprogramowania.</li>
                        <li>Rekomendacje dotyczące rozwoju nowego systemu bezpieczeństwa, jeśli modyfikacja istniejącego nie jest możliwa.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>