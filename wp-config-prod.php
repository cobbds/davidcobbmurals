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
define('DB_NAME', 'davidcob_murals');

/** MySQL database username */
define('DB_USER', 'davidcob_dba');

/** MySQL database password */
define('DB_PASSWORD', 'sD.vH~&pTJ$Q');

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
define('AUTH_KEY',         '7RQ=V0DDwPZ0370wBmvT,f5E5zx#u6[JFBn19VM^g~Ja`Z6I9=Jc{eYYMTa<ls4j');
define('SECURE_AUTH_KEY',  '8LEvH#bcGk7:1Nr.BEas7$:+G/!M__,X3k](UVZ)-(OF-ZEZmGmud;fP[Y3H/B3g');
define('LOGGED_IN_KEY',    'os.|HFXjoKa9#|Z](4dJ@=2C$Qj?k-#NH:[ILv,|52uoiU>.,kl$Gg?Gx:$Z/N)8');
define('NONCE_KEY',        'AlOj3{x|_TrsER<$>~;_iP&JL;:#T-WnAGIM|EYFxqA0GJ[z|MHSJhyJ j<O,#75');
define('AUTH_SALT',        '{xx@67Np;dJE|+}?I<|N8fR~%F*-0J eCw6kErNT<~$H`?o@ >jx!L[giwt9AH+>');
define('SECURE_AUTH_SALT', '~p.eiZd]K- hU[eX#N{I;?BzyEWc|jFfuQ+(08|LtDa|Gj4w{$@+-RQ0?F-D.hAA');
define('LOGGED_IN_SALT',   '=vW+_iu9RrbRQe<XZnX@+jIc0^}hI-`~e:Qp@*v<.h*mkA`U6: _bcL[$r%6LCWP');
define('NONCE_SALT',       'Eb?>z@NfDMg(<I:)zUQxc<<iFNc4ETl JB>ni<`Tp?+YJ^jC9`w?i]e6@n(+@!$c');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
/* MMP TODO remove for prod */
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
@ini_set('log_errors','Off');
@ini_set('display_errors','Off');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
