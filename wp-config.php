<?php

/**

 * The base configurations of the WordPress.

 *

 * This file has the following configurations: MySQL settings, Table Prefix,

 * Secret Keys, WordPress Language, and ABSPATH. You can find more information

 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing

 * wp-config.php} Codex page. You can get the MySQL settings from your web host.

 *

 * This file is used by the wp-config.php creation script during the

 * installation. You don't have to use the web site, you can just copy this file

 * to "wp-config.php" and fill in the values.

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'parkclub_wp717');



/** MySQL database username */

define('DB_USER', 'parkclub_wp717');



/** MySQL database password */

define('DB_PASSWORD', '3739r3S0Po');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'taoo5dvnojckvatp35c1r9t3phrnxtrcacbjxtlqrpvkdg94beocrv65oqrlo4dz');

define('SECURE_AUTH_KEY',  'tcxqrx2u2cimgqoyg02t7axlbsvm2dpqrh7parmzvfqrsna343hlqahpgrz0lfd0');

define('LOGGED_IN_KEY',    'ruj5k1cmuv6wyyiliyfamq6qywhfvbpf3asfyd0ltl6m0on4i4b5hscckxekplmc');

define('NONCE_KEY',        'cnte8kjevousb7cv5xbgq7sz7likcvfghkyyjigow2q07yhkwgrhtassem85ejtc');

define('AUTH_SALT',        'qkatxvacer1cdsqdir4od9cyvwb67ltn1f8re7trqbsjszm3pugfswgwob0jqx21');

define('SECURE_AUTH_SALT', 'n44b9bmjtzs2ezc6xds6zcyqxzzwkdmsv2uhudb7i2xbozsb02owlxtjic0jjybl');

define('LOGGED_IN_SALT',   'i89c6j2yyo2nzeptb4gugzgqnq7u9am4q4ao0u97xz3qmxxx0dh93utzu7es2tfp');

define('NONCE_SALT',       'wevgjmf9s2l27yfzcxglojt8r9vlrpxyeibymwkesmeg0tuyxigvwfeobkbouzbd');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each a unique

 * prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * WordPress Localized Language, defaults to English.

 *

 * Change this to localize WordPress.  A corresponding MO file for the chosen

 * language must be installed to wp-content/languages. For example, install

 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German

 * language support.

 */

define ('WPLANG', '');



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 */

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

