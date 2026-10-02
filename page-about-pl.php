<?php
/*
Template Name: О нас Польский
*/
?>

<?php $page_id = get_the_ID() ?>

<?php get_header() ?>

<main class="page-main">
    <section class="upper-block">
        <div class="upper-block__wrapper wrapper">
            <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="<?php echo get_home_url(); ?>">Strona główna</a></li>
                    <li class="breadcrumbs__item">O nas</li>
                </ul>
            </div>

            <div class="upper-block__text wow fadeInUp">
                <h1 class="upper-block__title title">Jesteśmy <strong>firmą informatyczną</strong> o zasięgu globalnym</h1>
                <p>Świadczymy pełen zakres usług w branży IT na całym świecie.</p>
            </div>
        </div>

        <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/head-photo-1.jpg" alt="">
    </section>

    <section class="about-us">
        <div class="about-us__wrapper wrapper">
            <h2 class="visually-hidden">O nas</h2>
            <div class="about-us__content">
                <div class="about-us__text about-us__text--top wow fadeInUp">
                    <p><strong>Jesteśmy młodą firmą informatyczną</strong> zarejestrowaną w 2023 roku składającą się z pasjonatów. Pomimo niedawnego wejścia na rynek, nasi pracownicy to doświadczeni specjaliści, każdy z nich w swojej dziedzinie. Bogate wcześniejsze doświadczenie programistyczne oraz zaangażowanie w różnorodne projekty daje nam pewność, że nasi specjaliści są w stanie zrealizować projekty o dowolnej złożoności z maksymalną jakością i wydajnością.</p>
                </div>

                <div class="about-us__text about-us__text--bottom wow fadeInUp">
                    <div>
                    <p>Ograniczenia narzucone przez szefów wielu firm z branży IT, nie pozwalają pracownikom na rozwój i wychodzenie poza korporacyjne zasady i przepisy, co często wpływa na jakość i możliwości tworzonych projektów, cofając je pod względem technicznym. Zawsze łatwiej jest podążać utartym szlakiem niż poświęcić czas na odkrywanie nowych ścieżek. Nas to jednak nie interesuje.
                        Jesteśmy zespołem pasjonatów, którzy zebrali się w jednym miejscu, aby znieść wszelkie ograniczenia i polegać wyłącznie na naszym doświadczeniu, inteligencji i kreatywności, wykraczając poza prozaiczne rutyny, przyzwyczajenia i korporacyjne zasady. Pozwala nam to na niekonwencjonalne spojrzenie na zasady rozwoju i jesteśmy gotowi podjąć się każdego, nawet najbardziej złożonego zadania, z indywidualnymi potrzebami i rozwiązać je jak najskuteczniej. <strong>Jesteśmy wynalazcami nowych podejść i praktyk w dziedzinie usług IT.</strong></p>

                        <a href="#page-form" class="button button--blue contact-button">Skontaktuj się z nami</a>
                    </div>
                </div>

                <div class="about-us__images wow fadeInUp">
                    <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/about-us-img-1.jpg" alt="">
                    <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/about-us-img-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="banner__wrapper wrapper">
            <h2 class="banner__title title wow fadeInLeftBig">Zasięg <strong>geograficzny</strong> naszej firmy</h2>
            <div class="banner__text wow fadeInRightBig">
                <p><strong>Jesteśmy międzynarodową firmą</strong>, której siedziba znajduje się w Europie. Nasza główna siedziba znajduje się w Warszawie, w Polsce. Niemniej jednak współpracujemy z firmami i osobami prywatnymi na całym świecie.</p>
                <p>Ponadto część naszych pracowników pracuje zdalnie, co umożliwia nam elastyczne kształtowanie procesów produkcyjnych oraz rekrutację dodatkowych osób do rozwoju produktów w sytuacjach dużego obciążenia pracą rozwojową.</p>
            </div>
        </div>
    </section>

    <section class="path">
        <div class="path__main-wrapper wrapper">
            <h2 class="path__title title wow fadeInUp"><strong>Kogo</strong> obsługujemy</h2>
            <div class="path__list-container">
                <div class="path__list-wrapper path__list-wrapper--tree swiper-container">
                    <ul class="path__list strategies swiper-wrapper">
                        <li class="strategies__item swiper-slide wow fadeInUp">
                            <div class="strategies__icon-block">
                                <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-1.svg" alt="">
                            </div>

                            <p class="strategies__title">Przedsiębiorstwa</p>

                            <p class="strategies__text">
                                Jeśli jesteś właścicielem małego lub dużego przedsiębiorstwa - możemy pomóc Ci w realizacji Twoich potrzeb. Systemy automatyzacji miejsc pracy, rozwój oprogramowania przemysłowego, modernizacja i rozwój bezpieczeństwa, rozwiązania chmurowe dla średnich i dużych przedsiębiorstw - uwielbiamy to.
                            </p>
                        </li>

                        <li class="strategies__item swiper-slide wow fadeInUp">
                            <div class="strategies__icon-block">
                                <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-6.svg" alt="">
                            </div>

                            <p class="strategies__title">Firmy zajmujące się tworzeniem oprogramowania i stron internetowych</p>

                            <p class="strategies__text">
                                Możemy pomóc Ci w opracowaniu strategii marketingowej, kampanii reklamowej i wprowadzeniu Twojego produktu na rynek.
                            </p>
                        </li>

                        <li class="strategies__item swiper-slide wow fadeInUp">
                            <div class="strategies__icon-block">
                                <img class="strategies__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/stages-icon-7.svg" alt="">
                            </div>

                            <p class="strategies__title">Klienci indywidualni</p>

                            <p class="strategies__text">
                                Nawet dla indywidualnych przedsiębiorców i małych firm możemy zaoferować pełen zakres usług w zakresie rozwoju oprogramowania, marketingu i promocji projektu w sieci.
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

    <section class="service">
        <div class="service__wrapper wrapper">
            <h2 class="service__title title wow fadeInUp"><strong>Mapa</strong> naszych usług</h2>

            <ul class="service__list">
                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-1.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Doradztwo</h4>

                        <ul>
                            <li><a>Rozwój strategii produktu.</a></li>
                            <li><a>Doradztwo w zakresie inżynierii produktów software'owych.</a></li>
                            <li><a>Audyt istniejących systemów i infrastruktury.</a></li>
                            <li><a>Automatyzacja procesów biznesowych i produkcyjnych.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-2.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Tworzenie stron internetowych</h4>

                        <ul>
                            <li><a>Rozwój portali internetowych o dowolnej złożoności.</a></li>
                            <li><a>Rozwój wszystkich typów stron, od landing page, do platformy handlowej.</a></li>
                            <li><a>Projektowanie stron internetowych.</a></li>
                            <li><a>Rozwój aplikacji internetowych.</a></li>
                            <li><a>Wsparcie projektów internetowych.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-3.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Rozwój oprogramowania</h4>

                        <ul>
                            <li><a>Dedykowane zespoły.</a></li>
                            <li><a>Rozwój oprogramowania na zamówienie.</a></li>
                            <li><a>Projektowanie i architektura oprogramowania.</a></li>
                            <li><a>DevOps</a></li>
                            <li><a>Testowanie stworzonego przez nas lub istniejącego oprogramowania.</a></li>
                            <li><a>Utrzymanie oprogramowania.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-4.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Projektowanie UX / UI</h4>

                        <ul>
                            <li><a>Projektowanie stron internetowych.</a></li>
                            <li><a>Opracowanie projektu i interfejsów użytkownika dla oprogramowania i aplikacji internetowych.</a></li>
                            <li><a>Rozwój tożsamości korporacyjnej i budowanie marki.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-6.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Usługi w chmurze</h4>

                        <ul>
                            <li><a>Doradztwo w zakresie rozwiązań chmurowych.</a></li>
                            <li><a>Rozwiązania w chmurze i migracja.</a></li>
                            <li><a>Doradztwo w zakresie bezpieczeństwa.</a></li>
                            <li><a>Kompleksowe rozwiązania w zakresie ochrony danych.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-7.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Bezpieczeństwo informacji</h4>

                        <ul>
                            <li><a>Doradztwo i analiza istniejących systemów bezpieczeństwa.</a></li>
                            <li><a>Modernizacja i aktualizacja ochrony danych w systemach off-the-shelf.</a></li>
                            <li><a>Testowanie bezpieczeństwa przedsiębiorstw (white-hatting).</a></li>
                            <li><a>Opracowanie i wdrożenie systemów bezpieczeństwa dla firm i przedsiębiorstw.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-8.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Marketing</h4>

                        <ul>
                            <li><a>Analiza rynku i ocena opłacalności produktu.</a></li>
                            <li><a>Badania marketingowe.</a></li>
                            <li><a>Opracowanie kampanii wizerunkowych i reklamowych.</a></li>
                            <li><a>Rozwój działań marketingowych, promocja rynku.</a></li>
                        </ul>
                    </div>
                </li>

                <li class="service__item serv-card wow fadeInRight">
                    <img class="serv-card__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/serv-card-icon-5.svg" alt="">
                    <div class="serv-card__text">
                        <h4>Telemarketing</h4>

                        <ul>
                            <li><a>Usługi telemarketingowe, promocja produktów i usług.</a></li>
                            <li><a>Utworzenie i organizacja działu telemarketingu w firmie.</a></li>
                            <li><a>Tworzenie oprogramowania, wyposażenie i konfiguracja działów telemarketingu.</a></li>
                            <li><a>Kontrola, aktualizacja i wsparcie działów telemarketingu.</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="using-tech">
        <div class="using-tech__wrapper wrapper">
            <h2 class="using-tech__title title wow fadeInUp"><strong>Wykorzystywane</strong> technologie</h2>

            <ul class="using-tech__nav-list wow fadeInUp">
                <li class="using-tech__nav-item active"><span>Back-end i języki programowania</span></li>
                <li class="using-tech__nav-item"><span>Języki interfejsów i frameworki</span></li>
                <li class="using-tech__nav-item"><span>DevOps: konteneryzacja, automatyzacja, monitoring</span></li>
                <li class="using-tech__nav-item"><span>Bazy danych</span></li>
            </ul>

            <ul class="using-tech__list wow fadeInUp active">
                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-1.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-2.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-3.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-4.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-5.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-6.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-7.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-8.png" alt="">
                </li>
            </ul>
            <ul class="using-tech__list">
                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-9.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-10.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-11.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-12.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-13.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-14.png" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-15.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-16.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-17.jpg" alt="">
                </li>
            </ul>
            <ul class="using-tech__list">
                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-18.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-19.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-20.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-21.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-22.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-23.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-24.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-25.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-26.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-27.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-28.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-29.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-30.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-31.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-32.jpg" alt="">
                </li>
            </ul>
            <ul class="using-tech__list">
                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-33.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-34.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-35.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-36.jpg" alt="">
                </li>

                <li class="using-tech__item technique">
                    <img class="technique__item" src="<?php echo get_template_directory_uri() ?>/assets/img/technique-37.jpg" alt="">
                </li>
            </ul>
        </div>
    </section>

    <section class="discuss">
        <?php include 'contact-form.php' ?>
    </section>
</main>

<?php get_footer() ?>


