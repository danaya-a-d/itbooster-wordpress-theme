<?php
/*
Template Name: Главная Польский
*/
?>

<?php $page_id = get_the_ID() ?>

<?php get_header() ?>

<main class="page-main">
    <section class="first-screen">
        <div class="first-screen__container swiper-container">
            <ul class="first-screen__sliders swiper-wrapper">
                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Jesteśmy - testerami oprogramowania</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-1.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Jesteśmy - specjalistami od rynku</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-2.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Jesteśmy - projektantami interfejsów</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-3.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Jesteśmy - programistami i projektantami
                            stron internetowych</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-4.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Jesteśmy - inżynierami oprogramowania</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-5.jpg" alt="">
                    </div>
                </li>

                <li class="first-screen__slider swiper-slide">
                    <div class="first-screen__wrapper wrapper">
                        <h1 class="first-screen__title title wow backInLeft">Jesteśmy - konsultantami technicznymi</h1>
                        <img class="first-screen__image"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/slider-bg-6.jpg" alt="">
                    </div>
                </li>
            </ul>

            <!-- Add Pagination -->
            <div class="first-screen__swiper-pagination wow fadeInLeft"></div>
            <div class="first-screen__counter counter wow fadeIn"></div>
        </div>
    </section>

    <section class="about">
        <div class="about__wrapper wrapper">
            <h2 class="visually-hidden">O nas</h2>

            <div class="about__content about__content--scroll wow fadeInUp hidden">
                <div class="about__text">
                    <div>
                        <p><strong>Jesteśmy grupą pasjonatów</strong>, którzy zebrali się, aby wyjść poza konwencje
                            narzucone przez kierownictwo dużej organizacji. Nasz zespół słada się z wysokich klas
                            specjalistów z różnych gałęzi <strong>branży IT</strong>. Każdy z nas posiada wieloletnie
                            doświadczenie w swojej dziedzinie.</p>

                        <p class="more">Wykonujemy cały zakres usług informatycznych, od doradztwa, przez dwie strony
                            internetowe i oprogramowania, po marketing i promocję produktów na <strong>rynku IT</strong>.
                            Promując brak narzuconych stereotypów, jesteśmy gotowi stworzyć projekt o dowolnej
                            złożoności i przejść Tobą z całą drogą od koncepcji do wydania, realizując najbardziej
                            śmiałe i niekonwencjonalne pomysły!</p>
                    </div>
                    <a href="#page-form" class="button button--blue contact-button contact-button--nomob">Skontaktuj się
                        z nami</a>
                </div>

                <div class="about__more"></div>

                <div class="about__image-block wow fadeInUp">
                    <img class="about__image"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/about-image.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="banner__wrapper wrapper">
            <h2 class="banner__title title wow fadeInLeftBig"><strong>Podróż od</strong> pomysłu do&nbsp;premiery</h2>

            <div class="banner__text wow fadeInRightBig">
                <p><strong>Słuchamy, doradzamy i dla Państwa tworzymy przyjazne dla użytkownika</strong>, wysokiej klasy
                    produkty <strong>IT</strong>.</p>
                <p>Dzięki naszemu doświadczeniu i pracy zespołowej znaleźliśmy sposób, aby przynieść naszym klientom
                    maksymalną korzyść.</p>
            </div>
        </div>
    </section>

    <section class="path">
        <div class="path__main-wrapper wrapper">
            <div class="path__list-container">
                <div class="path__list-wrapper swiper-container">
                    <ul class="path__list stages swiper-wrapper">
                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-1.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Analiza strategiczna</p>

                            <p class="stages__text">
                                <strong>Efekt:</strong> zestaw rekomendacji prowadzących do najbardziej efektywnego
                                rozwiązania problemu.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-2.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Planowanie i projektowanie techniczne</p>

                            <p class="stages__text">
                                <strong>Wynik:</strong> Techniczny zestaw rozwiązań, rozwój i wsparcie planu, projekt
                                wyrobu gotowego.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-3.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Rozwój produktu</p>

                            <p class="stages__text">
                                <strong>Rezultat:</strong> gotowy do użycia produkt.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-4.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Badania marketingowe, opracowanie planu promocji produktu</p>

                            <p class="stages__text">
                                <strong>Wynik:</strong> wprowadzenie produktu na rynek.
                            </p>
                        </li>

                        <li class="stages__item swiper-slide wow fadeInUp">
                            <div class="stages__icon-block">
                                <img class="stages__icon"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-5.svg"
                                     alt="">
                            </div>

                            <p class="stages__title">Zarządzanie, wsparcie, innowacje</p>

                            <p class="stages__text">
                                <strong>Wynik:</strong> rozwój produktu, opracowywanie innowacji w celu utrzymania
                                maksymalnej wartości produktu.
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

    <section class="team">
        <div class="team__wrapper wrapper">
            <ul class="team__list team-slider">
                <li class="team-slider__item">
                    <img class="team-slider__image wow animLeft"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/team-slider-img-1.jpg" alt="">
                    <div class="team-slider__content wow animRight">
                        <div class="team-slider__text">
                            <h2><strong>Wyobraź sobie zespół</strong>, który wzmocni Twój biznes.</h2>
                        </div>

                        <ul class="team-slider__toggles">
                            <li class="team-slider__toggle active">01</li>
                            <li class="team-slider__toggle">02</li>
                            <li class="team-slider__toggle">03</li>
                        </ul>
                    </div>
                </li>
                <li class="team-slider__item visually-hidden">
                    <img class="team-slider__image"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/team-slider-img-1.jpg" alt="">
                    <div class="team-slider__content">
                        <div class="team-slider__text">
                            <h2><strong>Wyobraź sobie usługi IT</strong>, które przyspieszą Twoją innowacyjność.</h2>
                        </div>

                        <ul class="team-slider__toggles">
                            <li class="team-slider__toggle">01</li>
                            <li class="team-slider__toggle active">02</li>
                            <li class="team-slider__toggle">03</li>
                        </ul>
                    </div>
                </li>
                <li class="team-slider__item visually-hidden">
                    <img class="team-slider__image"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/team-slider-img-1.jpg" alt="">
                    <div class="team-slider__content">
                        <div class="team-slider__text">
                            <h2><strong>Wyobraź sobie zaufanego partnera technicznego</strong> dla wszystkich Twoich
                                wyzwań informacyjnych.</h2>
                        </div>

                        <ul class="team-slider__toggles">
                            <li class="team-slider__toggle">01</li>
                            <li class="team-slider__toggle">02</li>
                            <li class="team-slider__toggle active">03</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="service">
        <div class="service__wrapper wrapper">
            <h2 class="service__title title wow fadeInUp"><strong>Usługi</strong> podstawowe</h2>

            <ul class="service__list">
                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-1.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Doradztwo techniczne</h4>
                        <p>Wysokiej klasy pomoc w wyborze rozwiązań technologicznych potrzebnych dla Twojego biznesu.
                            Automatyzacja procesów biznesowych. Audyt obecnych pakietów oprogramowania.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-2.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Web-development</h4>
                        <p>Tworzymy dla Ciebie projekty internetowe o dowolnej złożoności, od wizytówek po portale
                            informacyjne. Aplikacje internetowe dla Twojego biznesu w sieci.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-3.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Rozwój oprogramowania na zamówienie</h4>
                        <p>Szybkie i sprawne wdrażanie rozwiązań dostosowanych do potrzeb i możliwości Twojego
                            biznesu.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-4.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Projektowanie UX/UI</h4>
                        <p>Projektowanie produktów i interfejsów internetowych o najwyższym poziomie wygody,
                            intuicyjności i efektywności dla użytkowników Twojego produktu.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-5.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Usługi w chmurze</h4>
                        <p>Zarządzaj danymi, analizuj je i uzyskuj wyniki, których potrzebujesz, z maksymalną
                            wydajnością i bezpieczeństwem, korzystając z rozwiązań w chmurze. Zmaksymalizuj wartość
                            informacji - jednego z Twoich najważniejszych aktywów.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-6.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Bezpieczeństwo informacji</h4>
                        <p>Znaczenie bezpieczeństwa jest nie do przecenienia. Zapewnij maksymalny poziom bezpieczeństwa
                            dla danych wykorzystywanych w Twoich projektach. Nie daj szansy pozbawionej skrupułów
                            konkurencji lub innym intruzom.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-7.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Marketing</h4>
                        <p>Nowy poziom specjalistów od marketingu nauczy Cię jak prawidłowo pozycjonować Twój produkt na
                            rynku. Doradzimy Ci i stworzymy najbardziej dopasowane produkty promocyjne na podstawie
                            analizy rynku i Twoich danych, aby wypromować Twoją firmę i zwiększyć sprzedaż.</p>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-8.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Telemarketing</h4>
                        <p>Zwiększ sprzedaż swojego produktu lub usługi dzięki działowi telemarketingu. Jednym z
                            najskuteczniejszych sposobów sprzedaży jest sprzedaż bezpośrednio przez telefon. Znajdź
                            najskuteczniejsze sposoby z pomocą naszego zespołu i baz danych numerów telefonów. Możemy
                            również pomóc Ci zaprojektować, zorganizować i wyposażyć własny dział handlowy, który
                            zmaksymalizuje liczbę i skuteczność Twojej sprzedaży.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="discuss">
        <?php include 'contact-form.php' ?>
    </section>
</main>

<?php get_footer() ?>

