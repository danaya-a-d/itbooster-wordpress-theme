<?php
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

remove_action('wp_head', 'wp_resource_hints', 2); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

add_action('wp_enqueue_scripts', 'site_scripts');

function site_scripts()
{
    $version = '0.0.0.0';

    wp_dequeue_style('wp-block-library');
    wp_deregister_script('wp-embed');

    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/js/animate/animate.css', [], $version);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.css', [], $version);
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], $version);

    wp_enqueue_script('jq', get_template_directory_uri() . '/assets/js/jquery.min.js', [], $version, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', [], $version, true);
    wp_enqueue_script('animate', get_template_directory_uri() . '/assets/js/animate/wow.min.js', [], $version, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', [], $version, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], $version, true);
}

add_action('after_setup_theme', 'theme_support');
function theme_support()
{
    register_nav_menu('menu_main_header', 'Меню в шапке');
    register_nav_menu('menu_footer', 'Меню в подвале');
    add_theme_support('post-thumbnails');
    add_image_size('product', 626, 342, true);
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('includes/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields()
{
    require_once('includes/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields-options/post-meta.php');
}

add_action('init', 'create_global_variable');
function create_global_variable()
{
    global $main, $prod, $load, $form;

    $main = [
        'phone' => carbon_get_theme_option('site_phone'),
        'phone_2' => carbon_get_theme_option('site_phone_2'),
        'email' => carbon_get_theme_option('site_email'),
        'instagram_url' => carbon_get_theme_option('site_instagram_url'),
        'facebook_url' => carbon_get_theme_option('site_facebook_url'),
        'twitter_url' => carbon_get_theme_option('site_twitter_url'),
        'address' => carbon_get_theme_option('site_address'.carbon_lang_prefix()),
        'copy' => carbon_get_theme_option('site_copy'.carbon_lang_prefix()),
        'home' => carbon_get_theme_option('site_home'.carbon_lang_prefix()),
    ];

    $prod = [
        'name' => carbon_get_theme_option('product_name'.carbon_lang_prefix()),
        'title' => carbon_get_theme_option('product_title'.carbon_lang_prefix()),
        'about' => carbon_get_theme_option('product_about'.carbon_lang_prefix()),
        'button' => carbon_get_theme_option('product_button'.carbon_lang_prefix())
    ];

    $load =  [
        'loadmore' => carbon_get_theme_option('load_loadmore'.carbon_lang_prefix()),
        'nomore' => carbon_get_theme_option('load_nomore'.carbon_lang_prefix()),
        'loading' => carbon_get_theme_option('load_loading'.carbon_lang_prefix()),
    ];

    $form = [
        'title' => carbon_get_theme_option('form_title'.carbon_lang_prefix()),
        'placeholder_name' => carbon_get_theme_option('form_placeholder_name'.carbon_lang_prefix()),
        'placeholder_lastname' => carbon_get_theme_option('form_placeholder_lastname'.carbon_lang_prefix()),
        'placeholder_tel' => carbon_get_theme_option('form_placeholder_tel'.carbon_lang_prefix()),
        'placeholder_message' => carbon_get_theme_option('form_placeholder_message'.carbon_lang_prefix()),
        'button' => carbon_get_theme_option('form_button'.carbon_lang_prefix()),
        'success_title' => carbon_get_theme_option('form_message_title'.carbon_lang_prefix()),
        'success_text' => carbon_get_theme_option('form_message_text'.carbon_lang_prefix()),
    ];
}

add_action('init', 'register_post_types');

function register_post_types()
{
    register_post_type('product', [
        'label' => null,
        'labels' => [
            'name' => 'Блог', // основное название для типа записи
            'singular_name' => 'Запись блога', // название для одной записи этого типа
            'add_new' => 'Добавить запись', // для добавления новой записи
            'add_new_item' => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование записи', // для редактирования типа записи
            'new_item' => 'Новоая запись', // текст новой записи
            'view_item' => 'Смотреть запист', // для просмотра записи этого типа.
            'search_items' => 'Искать запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено записи', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Блог', // название меню
        ],
        'description' => '',
        'public' => true,
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => 5,
        'menu_icon' => null,
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'rewrite' => ['slug' => 'blog'],
        'taxonomies' => [],
        'has_archive' => true,
        'query_var' => true,
    ]);
}

add_action('init', 'carbon_lang_prefix');
function carbon_lang_prefix() {
    $prefix = '';
    if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
        return $prefix;
    }
    $prefix = '_' . ICL_LANGUAGE_CODE;
    return $prefix;
}


add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

function callback_mail()
{
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $message = $_POST['message'];
    $theme = 'Заявка с сайта Itbooster';
    $to = 'hello@itbooster.io';


    remove_all_filters('wp_mail_from');
    remove_all_filters('wp_mail_from_name');

    $headers = array(
        'From: ITbooster <' . $to .'>',
        'content-type: text/html',
    );

    $message_text = '<br>' .
        'Имя: ' . $name . '<br>' .
        'Фамилия: ' . $lastname . '<br>' .
        'Телефон: ' . $phone . '<br>' .
        'Email: ' . $email . '<br>' .
        'Сообщение: ' . $message;

    wp_mail($to, $theme, $message_text, $headers);
    wp_die();
}


add_action( 'wp_footer', 'artabr_lm_footer_scripts' );
function artabr_lm_footer_scripts() {

    wp_enqueue_script( 'artabr_lm_ajax', get_template_directory_uri() . '/assets/js/ajax.js', true );
    wp_enqueue_script( 'historyjs', get_template_directory_uri() . '/assets/js/history.js', true );

    // Add parameters for the JS
    global $wp_query;
    $max   = $wp_query->max_num_pages;
    $paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
    wp_localize_script(
        'artabr_lm_ajax',
        'mts_ajax_loadposts',
        array(
            'startPage'     => $paged,
            'maxPages'      => $max,
            'nextLink'      => next_posts( $max, false ),
            'i18n_loadmore' => __( $GLOBALS['load']['loadmore'], 'mythemeshop' ),
            'i18n_nomore'   => __( $GLOBALS['load']['nomore'], 'mythemeshop' ),
            'i18n_loading'  => __( $GLOBALS['load']['loading'], 'mythemeshop' ),
        )
    );
}

function redirect_to_home() {
    if(!is_admin() && (is_page('151') ||
                       is_page('236') ||
                       is_page('238'))) {
        wp_redirect(home_url());
        exit();
    }
}
add_action('template_redirect', 'redirect_to_home');
