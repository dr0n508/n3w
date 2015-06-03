<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'n3w');

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
define('AUTH_KEY',         '7A09gf=:/S!z+:1eScTK|A#H?`s lkf-]^/G_jun1@CQ^XF-/3ff ()bQmoPFF{?');
define('SECURE_AUTH_KEY',  'ynw(3WLo}R+_:,nt<2dP{WKqs3{d/lOP2O]x+;.JX,&( 4q^?f%_i)Ixu7b;)>zd');
define('LOGGED_IN_KEY',    '5d=Iu}@4-W<UXZ`J$BW|Ho&I-P]c(7j$n?c.75&dx[4=Wk).2q2:}oACv nHX#RL');
define('NONCE_KEY',        ';h{V4J@@K{!*HM=;Ot q[=&LPLk{Nh|+mD&BV(O7`^8nNKX=:[2]I[+}-*2#I`)a');
define('AUTH_SALT',        '-|%|;}+C#S,)vc,@]&vv8=E(Wl?YjJ_Cd_=V<>uYk)|O,WK:Zh>p2^+oNBjU8qem');
define('SECURE_AUTH_SALT', 'JT9Ql9K `:-btv!KI[$L5`l]h8e(c>6CkucaiK>,z|I]u#XW=&(Gz:<K4ge;KuW?');
define('LOGGED_IN_SALT',   '-XY||^M?:u)^mfE.s*A>R67O)}/Aw<r>m]+<eZfk74|&n;Jv[Xf4uQAk&j0cSZV[');
define('NONCE_SALT',       'rb `~e![4,j.4DibSeL-tg]VAB1uY_G:C2E}_T8lz P-[bG;Nb:G=^ i2Le$tYsh');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
