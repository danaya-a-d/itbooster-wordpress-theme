<?php
/*
Template Name: Услуга 3.4 Польский
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
                        <li class="breadcrumbs__item">Projektowanie UX/UI</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title">Wykorzystaj <strong>wysokiej jakości design</strong> w swoich produktach</h1>
                    <p>Design to nie tylko wygląd strony internetowej czy produktu software'owego, ale także użyteczność, funkcjonalność i intuicyjność jego interfejsu.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-4_1.jpg"
                 alt="">
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title"><strong>Projektowanie</strong> UX/UI</h2>
                            <p>Jest taki obszar projektowania, który ma na celu poprawę komunikacji pracowników lub użytkowników z oprogramowaniem. Poprawić łatwość zarządzania, zmniejszyć czas poświęcony na codzienne, rutynowe czynności.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>To jest właśnie domena projektantów UX/UI. Co może być gorszego niż niewygodny irytujący interfejs? Aby początkowa nauka obsługi Twojego produktu, a także jego codzienne użytkowanie były komfortowe i przyjemne, nasi projektanci sprawią, że będzie on jak najbardziej intuicyjny, wygodny i łatwy. Pozwoli to zaoszczędzić czas szkolenia i uprościć przepływ pracy. Projektujemy interfejs użytkownika (UI - User Interface), uwzględniając wszystkie odkryte wcześniej trudności, niuanse i niedociągnięcia, w oparciu o doświadczenie użytkownika (UX - User eXpirience).</p>

                            <a href="#page-form" class="button button--blue contact-button">Skontaktuj się z nami</a>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-4-blok-1-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-4-blok-1-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="reception reception--dark">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Jak tworzymy <strong>projekty UX/UI</strong></h2>

                <div class="reception__text wow fadeInUp">
                    <p>Świadcząc pełen zakres usług projektowych, tworzymy aplikacje, które są nie tylko piękne, ale i funkcjonalne. Proces projektowania składa się z następujących etapów:</p>

                    <ul>
                        <li>Badamy Twoje potrzeby, pragnienia i zasady działania, aby zrozumieć cele Twojego produktu i oczekiwania Twoich potencjalnych klientów.</li>
                        <li>Używamy najnowocześniejszych narzędzi i badamy trendy rynkowe oraz aktualne tendencje w projektowaniu wizualnym, aby opracować atrakcyjny i funkcjonalny interfejs.</li>
                        <li>Dopracowujemy, testujemy i kontrolujemy proces projektowania od pomysłu do realizacji, co pozwoli Ci osiągnąć Twoje cele z maksymalną efektywności.</li>
                        <li>W efekcie otrzymasz interfejs dla swojego produktu, który jest atrakcyjny wizualnie, funkcjonalny, przyjazny i łatwy w obsłudze. Wiemy, że intuicyjny i łatwy do opanowania interfejs będzie wygodny dla potencjalnych klientów i pracowników Twojej firmy.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="info info--no-margin">
            <div class="info__wrapper wrapper">
                <h2 class="info__title title"><strong>Etapy projektowania</strong>, rozwoju i wdrażania UX / UI design</h2>

                <ol class="info__list steps">
                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Wstępne konsultacje, badanie życzeń, wymagań i dotychczasowych doświadczeń z użytkowania.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Badania i analiza rynku oraz aktualnych trendów.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Stworzenie architektury, ram, elementów projektu wizualnego.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Tworzenie ram i testowanie.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Ogólny projekt wizualny i interakcje.</p>
                        </div>
                    </li>

                    <li class="steps__item wow fadeInUp">
                        <div class="steps__count"></div>
                        <div class="steps__text">
                            <p>Wdrożenie.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="discuss discuss--no-margin">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>