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
	'title' => array(
		'label' => __('Заголовок секции преимуществ', '{domain}'),
		'type' => 'text',
	),
	'advantages' => array(
		'type' => 'addable-popup',
		'label' => __('Преимущества', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => false,
		'limit' => 9,
		'popup-options' => array(
			'title' => array(
				'label' => __('Название преимущества', '{domain}'),
				'type' => 'text',
			),
			'numbers' => array(
				'label' => __('Номер преимущества', '{domain}'),
				'type' => 'text',
			),
			'description' => array(
				'type' => 'wp-editor',
				'label' => __('Описание преимущества', '{domain}'),
				'size' => 'small', // small, large
				'editor_height' => 400,
				'wpautop' => true,
				'editor_type' => false, // tinymce, html
			),
		),
	),

];