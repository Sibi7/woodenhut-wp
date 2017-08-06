<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	//ключ - slug опции, к которому будем обращаться во view
	//значение - массив конфигураций для опции
	'title'   => [
		'type'  => 'text',
		'label' => __( 'Заголовок секции', '{domain}' ),
	],
	'address' => [
		'type'  => 'text',
		'label' => __( 'Адрес', '{domain}' ),
	],
	'phone'   => [
		'type'  => 'text',
		'label' => __( 'Телефон', '{domain}' ),
	],
	'fax'     => [
		'type'  => 'text',
		'label' => __( 'Факс', '{domain}' ),
	],
	'email'   => [
		'type'  => 'text',
		'label' => __( 'Email', '{domain}' ),
	],
	'iframe'   => [
		'type'  => 'text',
		'label' => __( 'iframe карты', '{domain}' ),
	],

];