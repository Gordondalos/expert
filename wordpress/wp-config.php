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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '^fKABHB0)|d#6az|1%X]&CU)5~|QsuY-xT,m?fJ$Vq|zv_Pviq$/uX]m>jq>YnA$');
define('SECURE_AUTH_KEY',  'L>VR8(}A ,6/yvkl|,??(^{pAeJ6peKvoxo=8UwJ/vtP6JQMq%8p3VlKb|2M-V1-');
define('LOGGED_IN_KEY',    '# ]mji,Su]z-.E*/ry**yO>|7##G9v$!(+PjDa!-G!U]7++JLFjYDk>iR5GSb=8K');
define('NONCE_KEY',        'j;#u^{AAZyk$;&rm!{+r;^`EmX^e0OQ`OTaAy{E7+?0ma`9]%}I0~Wu_Cm$iLB@6');
define('AUTH_SALT',        't7I&F]SYH4dG|G>I2pY;ITjqAo?|tp>I99.|6|uW-g`MhLH2NdP ?n<@Q>~}5@F)');
define('SECURE_AUTH_SALT', '5%}#m&@kpwBWs$k#56N|bSyM=y-OPuObI3u=2l5)O3VGZ@6DVkvty[|.MOr#53Lw');
define('LOGGED_IN_SALT',   'F3rAS~.bQ%(A@#(]HE^8n:pmpJVe4ro@!-BoVh:L63xk)Y+!M]I,+8bFCv^c!SK>');
define('NONCE_SALT',       '`nZu,O&/^1]%qh0iD/j(FV@IF;I|hlZD1IO=xf{bFAJn]^W%uh8BIaf7MAA2LCy ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = '_wp';

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

define('WP_ALLOW_REPAIR', true);
