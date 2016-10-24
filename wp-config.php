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
define('DB_NAME', 'x98565li_mtkvrf');

/** Имя пользователя MySQL */
define('DB_USER', 'x98565li_mtkvrf');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mtkvrf2016');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'K^!q21 UUqG$p8b4a!Mo|jJ`C2D`a|IY+64w8li{p-FQBS:P%.RtB-Y{#<W:8LsN');
define('SECURE_AUTH_KEY',  'mwj] TSVeXzw99v?usD=w+.nFMa?56!)<)3G!4yCSS&9I_^gn.7KeV#5]$$Le@N$');
define('LOGGED_IN_KEY',    '+<XAoMr~sFfv1_,(=)D(Wffj,^H`Q{7q1aLsk2}.Nfa@! 0Op ;Q=@J>NXde{M>a');
define('NONCE_KEY',        '#bM|t~H(rl/L<J3hHmQRr.G8qF&4fcqzHM=`)+&J0HR]4u3ZE^T$ROI6Y&vy2J{V');
define('AUTH_SALT',        '!2@6yZm)ur&dA7QwSIlH(Qek#xbEMT-sSF~O:B)7n#69,5TuKl&d|Vj||FVNm1G=');
define('SECURE_AUTH_SALT', 'jCLy:?BAX0;qc{z}|n%?xtF4<s7]XE3oe^%roqfR!8solcDv*`YM60W>Z4|}`z+p');
define('LOGGED_IN_SALT',   '%hifiHNKibNPG<^Q3m ^&Mx.gaSvXFtBX{[9W_X!uBu[~)Ki_5LwBl~bTF=dcGg,');
define('NONCE_SALT',       '$<Dr3+$N;Pi?O!$ODbvBojJ2eYzjduaao-mje/^/EwWy}iPH/R6GN>osQJ~kJYB_');

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
define('RELOCATE', false);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
