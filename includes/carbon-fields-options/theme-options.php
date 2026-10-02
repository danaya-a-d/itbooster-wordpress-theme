<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

//Container::make('theme_options', 'Настройки сайта')


Container::make('theme_options', 'Настройки сайта')

    ->add_tab('Контакты', [
        Field::make('text', 'site_phone', 'Телефон')->set_width(50),
        Field::make('text', 'site_phone_2', 'Телефон 2')->set_width(50),
        Field::make('text', 'site_email', 'Email')->set_width(50),
        Field::make('text', 'site_address'.carbon_lang_prefix(), 'Адрес')->set_width(50),
        Field::make('text', 'site_instagram_url', 'Instagram')->set_width(33.333),
        Field::make('text', 'site_facebook_url', 'Facebook')->set_width(33.333),
        Field::make('text', 'site_twitter_url', 'Twitter')->set_width(33.333),
        Field::make('text', 'site_copy'.carbon_lang_prefix(), 'Копирайтинг')->set_width(50),
        Field::make('text', 'site_home'.carbon_lang_prefix(), 'Заголовок главной страницы')->set_width(50),
    ])

    ->add_tab('Страница блога', [
        Field::make('text', 'product_name'.carbon_lang_prefix(), 'Название'),
        Field::make('rich_text', 'product_title'.carbon_lang_prefix(), 'Заголовок'),
        Field::make('rich_text', 'product_about'.carbon_lang_prefix(), 'Описание'),
        Field::make('text', 'load_loadmore'.carbon_lang_prefix(), 'Кнопка "Показать ещё"')->set_width(33.333),
        Field::make('text', 'load_nomore'.carbon_lang_prefix(), 'Кнопка "Больше нет"')->set_width(33.333),
        Field::make('text', 'load_loading'.carbon_lang_prefix(), 'Текст в поле "Загрузка"')->set_width(33.333),
    ])

    ->add_tab('Формы', [
        Field::make('rich_text', 'form_title'.carbon_lang_prefix(), 'Заголовок основной формы')->set_width(100),
        Field::make('text', 'form_placeholder_name'.carbon_lang_prefix(), 'Текст в поле "Имя"')->set_width(33.333),
        Field::make('text', 'form_placeholder_lastname'.carbon_lang_prefix(), 'Текст в поле "Фамилия"')->set_width(33.333),
        Field::make('text', 'form_placeholder_tel'.carbon_lang_prefix(), 'Текст в поле "Телефон"')->set_width(33.333),
        Field::make('text', 'form_placeholder_message'.carbon_lang_prefix(), 'Текст в поле "Соообщение"')->set_width(100),        Field::make('text', 'form_button'.carbon_lang_prefix(), 'Текст кнопки'),
        Field::make('rich_text', 'form_message_title'.carbon_lang_prefix(), 'Заголовок сообщение об успехе')->set_width(50),
        Field::make('rich_text', 'form_message_text'.carbon_lang_prefix(), 'Текст сообщение об успехе')->set_width(50),
    ]);