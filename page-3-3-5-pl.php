<?php
/*
Template Name: Услуга 3.3.5 Польский
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
                        <li class="breadcrumbs__item">Testowanie</li>
                    </ul>
                </div>

                <div class="upper-block__text upper-block__text--big wow fadeInUp">
                    <h1 class="upper-block__title title"><strong>Testowanie</strong> oprogramowania</h1>
                    <p>Testowanie jest jednym z najważniejszych kroków przed wypuszczeniem produktu na rynek.</p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5_1.jpg"
                 alt="">
        </section>

        <section class="about-us">
            <div class="about-us__wrapper wrapper">
                <h2 class="visually-hidden">О нас</h2>
                <div class="about-us__content">
                    <div class="about-us__text about-us__text--top wow fadeInUp">
                        <div>
                            <h2 class="about-us__title title">Dlaczego <strong>testowanie</strong> jest konieczne</h2>
                            <p>Czy Twoje oprogramowanie działa poprawnie? Czy interfejs jest przyjazny dla użytkownika i łatwy w obsłudze? Czy aplikacja lub usługa odpowiednio wykonuje zadania, które zostały jej postawione? Na te pytania może odpowiedzieć nasz zespół testerów.</p>
                            <p>Nikt nie jest całkowicie odporny na ewentualne błędy. Nawet takie potwory branży jak Goggle, Microsoft, Intel, AMD, Nvidia i inne z ich niesamowicie ogromnym sztabem najwyższej klasy specjalistów nie są odporne na błędy i czynnik ludzki i od czasu do czasu wypuszczają jakieś poprawki i aktualizacje do swojego oprogramowania.</p>
                        </div>
                    </div>

                    <div class="about-us__text about-us__text--bottom wow fadeInUp">
                        <div>
                            <p>Testowanie jest ostatnią granicą przed wejściem projektu w fazę wydania. Aby potwierdzić wysoką jakość wypuszczonego produktu, musi on zostać dokładnie przetestowany w celu wykrycia błędów i nieścisłości oraz określenia użyteczności i intuicyjności interfejsu.</p>
                            <a href="#page-form" class="button button--blue contact-button">Skontaktuj się z nami</a>
                        </div>
                    </div>

                    <div class="about-us__images wow fadeInUp">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5-blok-1-1.jpg" alt="">
                        <img class="about-us__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5-blok-1-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="banner__wrapper banner__wrapper--big wrapper">
                <h2 class="banner__title title wow fadeInLeftBig">Jak to <strong>działa</strong></h2>

                <div class="banner__text wow fadeInRightBig">
                    <p>Po wydaniu produktu zespół programistów przekazuje go testerom, którzy uruchamiają go przez pewien czas jako zwykli użytkownicy lub pracownicy, sprawdzając użyteczność, a także wszelkie wbudowane funkcje, aby zgłosić napotkane problemy i przedstawić oprogramowanie do poprawy.</p>
                </div>
            </div>
        </section>

        <section class="reception">
            <div class="reception__wrapper wrapper">
                <h2 class="reception__title title wow fadeInUp">Fazy <strong>testowania</strong> produktu</h2>

                <div class="reception__text wow fadeInUp">

                    <ul>
                        <li>Przekazanie produktu zespołowi testującemu, wstępne badanie funkcjonalności i cech.</li>
                        <li>Analiza i ocena UI, generowanie raportów i ocena jakości.</li>
                        <li>Testowanie funkcjonalności i cech.</li>
                        <li>Generowanie raportów dla napotkanych błędów i przekazywanie informacji o wymaganych poprawkach.</li>
                        <li>Końcowe testowanie produktu po wprowadzeniu poprawek.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="about__wrapper wrapper">
                <div class="about__content wow fadeInUp hidden">
                    <div class="about__text">
                        <h2 class="about__title title">Upewnij się, że Twój produkt <strong>będzie bezbłędny</strong> w momencie premiery</h2>

                        <p>Nie ma wątpliwości, że pierwsze wrażenie z produktu kształtuje opinię o nim. Jeśli produkt trafia do wydania "surowy" i niedokończony, to nawet po wprowadzeniu poprawki, plotki o niskiej jakości mogą go prześladować przez długi czas, co będzie miało niezwykle negatywny wpływ na jego reputację. Dlatego niezwykle istotne jest, aby oprogramowanie było wydawane w nieskazitelnej formie dopiero po jego dokładnym przetestowaniu i wprowadzeniu wszystkich niezbędnych zmian i poprawek. Takie podejście do tworzenia oprogramowania jest dla nas standardem. Robimy wszystko, co w naszej mocy, aby zapewnić, że jesteś zadowolony z naszej pracy i że Twoja reputacja w zakresie jakości i wartości pozostanie nieskażona.</p>
                    </div>

                    <div class="about__image-block wow fadeInUp">
                        <img class="about__image" src="<?php echo get_template_directory_uri() ?>/assets/img/3-3-5-blok-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>