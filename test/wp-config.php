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
define('DB_NAME', 'wp_blog');

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
define('AUTH_KEY',         ';BWsv9x$O{$$}IKSwoRaD4s,#4(y=+*0]6J,LmCUEdZ9n,Hw]*@e6e+;kF[~uz9>');
define('SECURE_AUTH_KEY',  '^L.69tdn;+s8wK?#>.]i+ckhd,F{XQrdNWb(X&-5iU>~_6iZd HRLTbwbRLNL8Xu');
define('LOGGED_IN_KEY',    '@)h`@urzpy6UHr._1=DXh[H{&4j,9&%.d_eN8F[$WgGf/3c%88fn[KB-z.*!o+Yb');
define('NONCE_KEY',        'jb:JUv-{g<z!,idJm|?S+Z&i/SY|DUA^PQ2yfG`7f;S |7[c~VzcO^2[$m.%Kpx1');
define('AUTH_SALT',        'o4<K-cH_l0@7+:iEjYRiRNotGkI)iJJ3{]v <kcn2nZgL|XT|?P;+2mYIb/A4sgA');
define('SECURE_AUTH_SALT', '~!*9_1(g[N|{y1yZy$5vpRX%!z1N?4I!3(?c}FQB#{ge{AwbA|{0T[7n^]7T5[)^');
define('LOGGED_IN_SALT',   'n~|5 j8rRGu/Iv>Lr;S]IGs:5^^&@>%S@Y5&}xkf1m>>Jl!T^dFUY`AOb]fxM*us');
define('NONCE_SALT',       '$&X`X6]AeO8jy![={mQbx,VJ#n-$w2.I%>KxB$np5qKvK0bbBIK|@@P(!kR>d6o8');

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
