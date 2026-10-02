<?php get_header() ?>

    <main class="page-main">
        <section class="upper-block">
            <div class="upper-block__wrapper wrapper">
                <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="<?php echo get_home_url(); ?>"><?php echo $GLOBALS['main']['home']; ?></a></li>
                        <li class="breadcrumbs__item"><a href="<?php echo get_post_type_archive_link('product');?>"><?php echo $GLOBALS['prod']['name']; ?></a></li>
                        <li class="breadcrumbs__item"><?php the_title();?></li>
                    </ul>
                </div>

                <div class="upper-block__text wow fadeInUp">
                    <h1 class="upper-block__title title"><?php the_title(); ?></h1>
                    <p><?php echo get_the_date(); ?></p>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/head-photo-2.jpg" alt="">
        </section>

        <article class="main-article">
            <div class="main-article__wrapper wrapper wow fadeInUp">
                <?php the_content(); ?>
            </div>
        </article>

        <section class="discuss">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>