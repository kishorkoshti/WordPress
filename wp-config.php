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
define( 'DB_NAME', 'wordpress5' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xAhxJ_R(h_pAIK^##;b6H!j|`%mK4,0j7 i=*&GKo}P8=AAu~^A-os=I(0grU6i`' );
define( 'SECURE_AUTH_KEY',  '^f E7Pq3Af0GE>}b1X&w# taG DE==.Xu_A9Q?[)2uX(vGiw>`dq?#dH:EEDRYo7' );
define( 'LOGGED_IN_KEY',    '=qTwx2bWSxe~Nkw.3_,>.U|iCQC&>Pxs@72T1Hmn.t9:50DM;S}OU=z0kuxLOq#{' );
define( 'NONCE_KEY',        'Z[27|kazo-?~Yfdj=d3lKy7rJ&icJjWYKN!>J^&0?>%)t7SK~~{zgD%r`LxNcn<3' );
define( 'AUTH_SALT',        'bG>2~NO$Jb3gW#}&jvaWt.wx^N[$,2u~)-_pGr6+:eSINiV{Vfadvg!|l?B2]eNK' );
define( 'SECURE_AUTH_SALT', 'Y]W([$o^wju;Y!1J@R;=BeF{}6,S-Pc|]t54D`Bs ?pD/-* ~2G|QWm_k]u*-5=s' );
define( 'LOGGED_IN_SALT',   '6j9zP@i%|<O2ySggE3ZJ(J3^U2O8IU5uT(U rwVV5T}h,:}TZ1Qh/!+{3C2fpI01' );
define( 'NONCE_SALT',       'WU`8)Sp<~VaO{3>EIHBy>8~{O#I`i_zfW0LhymESl9p+%}I+J;b%qyft[^EsBa6P' );

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
