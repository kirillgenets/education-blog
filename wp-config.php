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
define( 'DB_NAME', 'education.wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'education.wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6~D8`$/B0dqbJJTjv6OHxc5e~QFL(~/i:Lr?RRY5e[i9Y$zXnZrw1[u_ek6PB?-z' );
define( 'SECURE_AUTH_KEY',  '@2{xUD&Ra(?PEJw7&vzgubp^v46(<!mr%3(yh6Z)xdQHVCaf$4VrPR)Fd}HN<BTo' );
define( 'LOGGED_IN_KEY',    '!5Ac Gj7jQL~kov-tZ]lXhZ<?>Kw1$?@(:scj&wf8(g1SqH-<P}7E(udO4E|A2`v' );
define( 'NONCE_KEY',        'fyN;TM-V[ZHeDyd`Yf0X[^^O^/?H !XiiJUdc7Eypvx2WmC35Dv@_Gy!9-OKt]VW' );
define( 'AUTH_SALT',        '&#gcqi0q.`ISB@QtIljGMkT|<gwu1U}_RBux4,~_>fu2MW{lujH*j[;PyX|uFCe^' );
define( 'SECURE_AUTH_SALT', 'LQt~V!m{xyD8sS,myMr/]dB%lHo?kz>l}E]4i4Im,rp7kvhizYG4kX_^E:aTAYC|' );
define( 'LOGGED_IN_SALT',   '69t/IKlLy,gN0gg>nQ+2CX3$R8T]d^Nh2J3({NZ@r3R6B$wPYuwQKC9)7c^LX7xh' );
define( 'NONCE_SALT',       'Y?Z;AFE2s]!c[h1C-*GH#XM|%pJOl#k5QJVl#8`,%&MEb.]K815YQ@6s[zjJ0bsd' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
