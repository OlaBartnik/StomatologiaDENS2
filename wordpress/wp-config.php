<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dens2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vz(ht/#h7^.wb?lPR.Wwm6BNyCb4nx`{1wqrP~9HJEy2|>?qGr:8Y5fZ:)]d+@5Q' );
define( 'SECURE_AUTH_KEY',  ']WHLoJ:*W><hk@;h`ju 3Fwh[+Fb_4HB~4jmb}qJ1)%8o$Xa`?gN42< 7{>ALA%F' );
define( 'LOGGED_IN_KEY',    '6=lo[ZnwL(GU 5eW!Rxn+$v}&J3:#fA*;>{1};`hTn3Bd/(JT5hed!uzpZKb~D#?' );
define( 'NONCE_KEY',        ':&Z7g0P-GGJ5NK/{9|CG <&sY)XC~1h,G!vE(rzG#,y8Hh^C| %? p1<T|.dxY0z' );
define( 'AUTH_SALT',        '5{]?vK%=v>G0`hsfO0jZgwku_WF8^.SMNLWM8!6sy9Aq,~`5fYAyVwvn`LkuF|)7' );
define( 'SECURE_AUTH_SALT', '{<o-YKLs.P@DRk=,*RXTO cdfmug]=ExC_`_#}L%-Ml L8aPWu2;Ty^6F_Qf@#c7' );
define( 'LOGGED_IN_SALT',   'j(Cvp1#uwz]O $.Kr4tf,;1yq{&|;_jhDP$o)Jj8Fr}^_cu|.?4+^o+G+#,9R&!F' );
define( 'NONCE_SALT',       '|DcedXJ-F5Nc:d$q#I`gIx3hULOu:K22lum>7=6&sV3E!)o|=`Ycpms:LDc%|~G3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
