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
    'background-img' => array(
        'type' => 'upload',
        'label' => __('Фоновое изображение', '{domain}'),
        'images_only' => true,
    ),
    'logo' => array(
        'type' => 'upload',
        'label' => __('Логотип', '{domain}'),
        'images_only' => true,
    ),
    'text' => array(
        'type'  => 'text',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Заголовок', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 400,
    ),
];