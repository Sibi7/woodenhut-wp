<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'woodenhut');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UP;mY!nEIP-Jd/O,]8auxNiPQTq:G5i1{i@vfyOOc)j5|3A)Ur~5AG*KYeq|3Jc3');
define('SECURE_AUTH_KEY',  '%=;hS]O5Q6/v]PP9EQ05gT mRGbH#WfLu6F~$m9]e|:*xk}OHJ-LUE$6+Lu!&JYT');
define('LOGGED_IN_KEY',    '5i)Pe0+Ms.S:O/<W=SEF9tNPNMPqcJksJuB27hP&9kJ0FDL$!pF>d)]RVrM{1/8#');
define('NONCE_KEY',        '0PJF#F^|.Y|w$Of@8jaAjsrY;~C2Wfyv(9]EE;z@Iwfx&Pm,tnz]%J66+P*plV_7');
define('AUTH_SALT',        'ef6q)mGJ+]r(jvS@icr^Jg`]HFJCDcTi=T[1,`xc=)tWXT_hi/#tb-jd< 2G!yVw');
define('SECURE_AUTH_SALT', ':=HrR&]|IK%N6Uqe@A&7nF!a45nVf3s:?{No$|A_<cKFTwej0m!k=@ForIy:q_=|');
define('LOGGED_IN_SALT',   'pW:*#;S(yHEr1,f{#5&nbJTCH|xlX5<=MBpIvTY&.%)?G/aogw[od@YP)u?+o{>6');
define('NONCE_SALT',       'N{,l/`w*e;EK09dfJLc}$qD?6oF$x;{lQZgcY$f=n28liYJaj,ptZ=fzXXQs3*2H');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
