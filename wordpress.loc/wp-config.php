<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db_wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')y~cvh_V8=S~d>+<D4Yil73P1|pncv(_AcA~-f ~=Sq|4Y$|!kziPD;u}/;X |cB' );
define( 'SECURE_AUTH_KEY',  '<&~5}n_4 y^7,qpZz0Wyoc#s~4QEWMHhxl;DP+q[^60Bip$E)<}Vl(8b)#<v)+4 ' );
define( 'LOGGED_IN_KEY',    '#:06b;xDC@dfF%uPVZ[_E7bZz9*CBm%txod`TnTsb S?vopLSy!$b5`,XVoy9r&n' );
define( 'NONCE_KEY',        'R{5[3*a|TH[c |;q%yYR.Ka9pdI6@fT7!5T.vAz3W70Gj?HjkdG:gVHVq^O)v_|h' );
define( 'AUTH_SALT',        'HR!G/`_xfjR|LU5C33)al/va-:ryeN669&r @x_8N]Riez^$M7,Q2h$z5@p{?!Po' );
define( 'SECURE_AUTH_SALT', 'gjeL/DV%v`j^%W0$T@p4svnYFg]3e|qJ>bdZ05zq{=mPD%9D.c0EjwcB-uuS(&q*' );
define( 'LOGGED_IN_SALT',   'Z}[6p iw0uCQX]%O@zAVHZb f/B~5H!_K=/=hDjs=$PDtlQX#Q<x?2cc(hAF{lY3' );
define( 'NONCE_SALT',       'Ot9$CT;cbKC#UD<b)GSbEk=Rd.%sLMO[w}iuRJ{L9fe2hg%.1c{f] xFaqvK}ikM' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ij_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
