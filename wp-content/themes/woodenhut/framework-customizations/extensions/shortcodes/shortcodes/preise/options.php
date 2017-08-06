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
	'title'       => [
		'type'  => 'text',
		'label' => __( 'Заголовок секции', '{domain}' ),
	],

	'img'         => array(
		'type'        => 'upload',
		'label'       => __( 'Фотография', '{domain}' ),
		'images_only' => true,
	),
	'panel_price' => [
		'title' => __('Цена', '{domain}'),
		'type' => 'addable-popup',
		'label' => __('Цена', '{domain}'),
		'template' => '<i class="{{- icon }}"></i> {{- link}}',
		'limit' => 1,
		'size' => 'medium', // small, medium, large
		'add-button-text' => __('Добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => array(
			'icon' => array(
				'type' => 'icon',
				'label' => 'Иконка',
			),
			'link' => array(
				'type' => 'text',
				'label' => __('Сумма', '{domain}'),
			),
			'nds' => array(
				'type' => 'text',
				'label' => __('НДС', '{domain}'),
				'value' => 'Preis inkl. MwSt.',
			)
		),
	],
];