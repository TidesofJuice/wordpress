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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '% )<ipqJJp6RN=yco;<=Ynq9Q;t&zd& ~!Kqf524887_QyO>Wzofq023OL-iwPK,' );
define( 'SECURE_AUTH_KEY',  'cR$c,sz]WSi7VbLk9IV,YnjJXgW=]qBGb5ezANX gbRKEoJ;TZO`!wym5|%%++(y' );
define( 'LOGGED_IN_KEY',    'mMh?R^e/NJ-8JxI<|KE&0Tkf:UG43Igb@_J7D!!9W@qAKrk=Cgq9q_xvV%Rq=@Zm' );
define( 'NONCE_KEY',        '~aUq:Y% 8LEt7s rB@UxIxgZpoi9JRBbL{SR@M{PZEfIM.DvCg{@S<}4VcZnh1vN' );
define( 'AUTH_SALT',        'c+>-l~j~k/d$bHL=7TAN`[ &p+;a;w;qNML4lLOp-q]`>6^AC%5l^it!Q_?1=Fos' );
define( 'SECURE_AUTH_SALT', 'f<8E3*yux(B,vB6zcPZKz_D({QLTZ6q5400,?SC8TjI_?-noOp,&jYl`X([{t(,:' );
define( 'LOGGED_IN_SALT',   '?q[0O)m39|$CS8 3,?`&Ffo]0@^IwX3FKLb|Para/abHUh}1Tc8]wOl+g, O1[z4' );
define( 'NONCE_SALT',       'Rxn@OE3{[DStGg)]/7,<99o&>cfeI7<&$YEf!0Y<<IGR(AB]J7/_<j/*Z{!Wp+}A' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
