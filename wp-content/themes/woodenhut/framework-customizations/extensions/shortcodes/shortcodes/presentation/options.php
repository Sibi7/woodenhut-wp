<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'title' => array(
        'type'  => 'text',
        'label' => __('Заголовок', '{domain}'),
    ),
    'text' => array(
        'type'  => 'wp-editor',
        'label' => __('Текст', '{domain}'),
        'size' => 'large', // small, large
        'editor_height' => 400,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html
    )
];