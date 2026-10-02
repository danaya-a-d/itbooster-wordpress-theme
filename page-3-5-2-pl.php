<?php
/*
Template Name: Услуга 3.5.2 Польский
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
                        <li class="breadcrumbs__item"><a>Usługi w chmurze</a></li>
                        <li class="breadcrumbs__item">Rozwiązania w chmurze i migracja</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Rozwiązania w chmurze i <strong>migracja</strong></h1>
                    <p>Zapewnij sprawne działanie swoich systemów, aby osiągnąć swoje główne cele.</p>
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
                                <h2>Chmura jest <strong>najlepszym rozwiązaniem</strong> dla większości firm</h2>
                                <p>Poznaj i wykorzystaj ogromny potencjał chmury, jednocześnie modernizując i optymalizując swoją obecną infrastrukturę on-premises.  Wykorzystując nasze doświadczenie i wiedzę, stosujemy kompleksowe podejście do migracji i migracji danych, umożliwiając Twojej firmie wykonanie wszystkich kroków niezbędnych do bezpiecznej migracji do CloudNative.</p>

                                <a href="#page-form" class="button button--blue contact-button">Skontaktuj się z nami</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="info">
            <div class="info__wrapper wrapper">
                <h2 class="info__title title">Schemat <strong>migracji</strong> do chmury</h2>
                <p class="info__about">Opracowaliśmy wygodny, sprawdzony projekt składający się z kilku przemyślanych kroków, dzięki którym migracja będzie szybka i bezbolesna.</p>

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Krok 1: Analiza</h4>
                            <p>Analiza zadań i wymagań -> Analiza zasobów komercyjnych i technicznych -> Określenie objętości i rodzaju danych do migracji -> Określenie harmonogramu migracji -> Utworzenie zespołu ekspertów</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Krok 2: Planowanie</h4>
                            <p>Wybór odpowiedniej architektury chmury -> Wybór dostawcy chmury -> Kalkulacja kosztów rozwiązania -> Opracowanie strategii migracji -> Uwzględnienie ryzyka -> Wybór rodzaju migracji (stopniowa lub pełna) -> Stworzenie planu migracji</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Krok 3: Migracja</h4>
                            <p>Instalacja i konfiguracja usług -> Uruchomienie i testowanie usług -> Migracja danych -> Rozwiązywanie problemów -> Optymalizacja</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <h4>Krok 4: Wsparcie</h4>
                            <p>Uaktualnienie cech i funkcjonalności rozwiązania w chmurze -> Wsparcie i aktualizacja -> Skalowanie w górę</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Dlaczego warto <strong>przenieść</strong> się do chmury z nami</h2>

                <div class="reception__text wow fadeInUp">
                    <p>Migracja do chmury zapewni Ci wiele korzyści, w tym lepszą skalowalność, łatwość zarządzania i bezpieczeństwo. Migrując z nami, możesz zwielokrotnić te korzyści. Co zyskujesz:</p>

                    <ul>
                        <li>Kompleksowe wsparcie ze strony certyfikowanych ekspertów.</li>
                        <li>Sprawdzoną platformę chmurową wykorzystującą wszystkie istotne technologie.</li>
                        <li>Wsparcie w zakresie analizy procesów biznesowych, DevOps, CloudOps, DataSolutions i bezpieczeństwa.</li>
                        <li>Pewność w podejmowaniu decyzji, ponieważ będą one oparte na wiedzy zdobytej dzięki analizie procesów biznesowych, kosztów, ryzyka, zalet i wad wszystkich możliwych rozwiązań chmurowych.</li>
                        <li>Dostęp do szerokiego wachlarza możliwości realizacji dodatkowych projektów.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>