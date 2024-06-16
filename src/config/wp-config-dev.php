<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lohl_labs' );

/** Database username */
define( 'DB_USER', 'lohl_labs' );

/** Database password */
define( 'DB_PASSWORD', 'lohl_labs' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r#]:zEh!tlrz ;xsi}=l]5@({lzkv7?v]~s~0.v|!g/ta<w(a@zJRMw`rj_ZjI8Q');
define('SECURE_AUTH_KEY',  'Ls!OK-~M+X,rpLc}`_Ce}_>M-dyM)H@hQ:(Tg1|5/+,rxBIXVPD]5_C46-g2>nX8');
define('LOGGED_IN_KEY',    'gh<,}fkS,@N?pMxKsSJw?2=]4[Z/l$YwB/T$xa.t.ylL>UPw9h|-X<;Y3HL+UA_]');
define('NONCE_KEY',        'lozllZ!]$5lmKc=/ZZulAcDqET%zg{}9@s6|%&LF.=G{E8]~w,pe]FQyIOk4$qQ4');
define('AUTH_SALT',        ']8t@A-##.>ud38I`Ob/-$*!u:Ny5`XK[IC3/*[H_%Kr9}=fC?}uv.cSCdN^QZLUX');
define('SECURE_AUTH_SALT', '))_BQ) A1%JytpQL@X[-DA5mQ7/_1X&}n28NlK<RQ 3g a.<>,W**hi[N/z.GqD.');
define('LOGGED_IN_SALT',   '.$EL|gmgSO+D$aB{Id < jNE{<nt?f rRn<<4DTExhad~(jAeKh7 FNCm.9tP|Dx');
define('NONCE_SALT',       'q]@_oM_!fW#ulpB`fhZU*2(OqH+9+k`?AXKI3pOu&u2|2c=G#B(!pYz{cvLIrwl^');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define ('FS_METHOD', 'direct');
define ('FS_CHMOD_DIR', 0755);
define ('FS_CHMOD_FILE', 0644);
define( 'WP_HOME', 'http://host.docker.internal' );
define( 'WP_SITEURL', 'http://host.docker.internal' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';