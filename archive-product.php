<?php $page_id = get_the_ID(); ?>
<?php get_header() ?>

<?php get_header() ?>

    <main class="page-main">
        <section class="upper-block">
            <div class="upper-block__wrapper wrapper">
                <div class="upper-block__breadcrumbs breadcrumbs wow fadeInUp">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a href="<?php echo get_home_url(); ?>"><?php echo $GLOBALS['main']['home']; ?></a></li>
                        <li class="breadcrumbs__item"><?php echo $GLOBALS['prod']['name']; ?></li>
                    </ul>
                </div>

                <div class="upper-block__text wow fadeInUp">
                    <h1 class="upper-block__title title"><?php echo $GLOBALS['prod']['title']; ?></h1>
                    <?php echo $GLOBALS['prod']['about']; ?>
                </div>
            </div>

            <img class="upper-block__image" src="<?php echo get_template_directory_uri() ?>/assets/img/head-photo-2.jpg"
                 alt="">
        </section>

        <section class="blog-sec">
            <div class="blog-sec__wrapper wrapper">

                <ul class="blog-sec__list blog-list">
                    <?php
                    global $catalog_products_query;

                    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $params = array(
                        'posts_per_page' => 4, // количество постов на странице
                        'post_type' => 'product', // тип постов
                        'paged' => $current_page // текущая страница
                    );

                    query_posts($params);

//                    $catalog_products_query->is_archive = true;
//                    $catalog_products_query->is_home = false;

                    while (have_posts()): the_post();
                        echo get_template_part('product-content');
                    endwhile;

                    ?>
                </ul>

                <div class="button-more load-more__button">
                    <?php the_posts_pagination(); ?>
                </div>

                <div class="pug-navigation">
                    <?php the_posts_pagination(); ?>
                </div>

                </div>
        </section>

        <section class="discuss discuss--no-margin">
            <?php include 'contact-form.php' ?>
        </section>
    </main>

<?php get_footer() ?>