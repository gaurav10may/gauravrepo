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
switch ( $_SERVER['HTTP_HOST'] ) {
	case 'dev.nbcupress.example.com': 
		// DEV ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.81');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
	case 'qa.nbcupress.example.com':
		// QA ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.186');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
	case 'stage.example.com': 
		// STAGE ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.85');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
	case 'origin-stage.example.com': 
		// STAGE ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.85');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
	case 'example.com': 
		// PRODUCTION ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.70');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
	case 'www.example.com': 
		// PRODUCTION ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.70');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
	case 'origin-example.com': 
		// PRODUCTION ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.70');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
	case 'origin-www.example.com': 
		// PRODUCTION ENVIRONMENT
		/** The name of the database for WordPress */
		define('DB_NAME', 'ENTER_DATABASE_NAME');
		/** MySQL database username */
		define('DB_USER', 'ENTER_DATABASE_USERNAME');
		/** MySQL database password */
		define('DB_PASSWORD', 'ENTER_DATABASE_PASSWORD');
		/** MySQL hostname */
		define('DB_HOST', '66.77.88.70');
		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');
		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
}
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

/** MySQL hostname */

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
define('AUTH_KEY',         'U[.q~+W| #|!LP&).J+)aHhBJiP{=sy&ot{IY1P|+6;tx17K_nO<a-P4M)C~lTe|');
define('SECURE_AUTH_KEY',  'y%0dR5[_1&!L+Y-3g0 )]<*nw_9Z}FiP]i}d ]&:f,YQ%.zl/0GTyj>]hU*MDS;2');
define('LOGGED_IN_KEY',    '&gQi+x1aqjlOLAh:6.7b=UKI9v9`#jpSrU4q[X^HF~6[X&3uw*f[UpdVERg}(cCt');
define('NONCE_KEY',        'ZuhbA-#+G.vFTT,kcDJ&Q$Yn^/kPrSQT<B2&~EW!7T[57D*7<nT}~NWq<+Z-`[tn');
define('AUTH_SALT',        'vh.6-WFepd._O+u1q%]ETU~2H|H=PA-atI46dy~YYv%n>pG!+7#BS<|ysL1Ik/h<');
define('SECURE_AUTH_SALT', ']ty|.2ki$^qOMygW^n%_[Qzn)v:~`79Z]Vmw5Uh0-R{+qZL4h72SC++aZV=DbR=Q');
define('LOGGED_IN_SALT',   '[{#:/Ar|[rJ7O^;p4mF]6!.oKZYP<]y}a]vyz2lpDBS|*,egV,m!AZ!ozOI%JsFi');
define('NONCE_SALT',       '#EUL-<i<ocm#o0EPAf{?js[SOBu/,IRlR~p) b^4j{HnV#q-=V10b0FFDF@qQt~$');

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

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/site-content' );
define ('WP_CONTENT_URL','/site-content');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/*********************************
ENVIRONMENT URL OVERRIDE
*/


switch ( $_SERVER['HTTP_HOST'] ) {
	case 'dev.nbcupress.example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://dev.nbcupress.example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://dev.nbcupress.example.com/nbcupress' );
		break;
	case 'qa.nbcupress.example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://qa.nbcupress.example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://qa.nbcupress.example.com/nbcupress' );
		break;
	case 'stage.example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://stage.example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://stage.example.com/nbcupress' );
		break;
	case 'origin-stage.example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://origin-stage.example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://origin-stage.example.com/nbcupress' );
		break;
	case 'example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://example.com/nbcupress' );
		break;
	case 'www.example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://www.example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://www.example.com/nbcupress' );
		break;
	case 'origin-example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://origin-example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://origin-example.com/nbcupress' );
		break;
	case 'origin-www.example.com': // Our localhost install is in a subfolder, so we're overriding the URLs here
		define( 'ENV_LOCAL_HOME', 'http://origin-www.example.com' );
		define( 'ENV_LOCAL_SITEURL', 'http://origin-www.example.com/nbcupress' );
		break;

	// Other environments that use subfolders should go here as well
	// Use this to customize other constants across environments

	default: // default to HTTP_HOST
		define( 'ENV_LOCAL_HOME', 'http://' . $_SERVER['HTTP_HOST'] ); // this needs be changed if https should be supported
		define( 'ENV_LOCAL_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] ); // this needs be changed if https should be supported
		break;
}


/// BEGIN COMMENTING OUT FOR INSTALLATION BELOW THIS LINE:
/*


// Hard-code the values of our production environment
define( 'WP_HOME', 'http://www.example.com' );
define( 'WP_SITEURL','http://www.example.com/nbcupress' );

define( 'ENV_NOT_PRODUCTION', WP_HOME !== ENV_LOCAL_HOME );

if ( ENV_NOT_PRODUCTION ) {
	// Override the COOKIEHASH in non-production environments
	// We need to do this since COOKIEHASH is based off the siteurl and auth will fail
	define( 'COOKIEHASH', md5( ENV_LOCAL_HOME ) );
}


*/
/// END COMMENTING OUT FOR INSTALLATION ABOVE THIS LINE



/// END: ENVIRONMENT URL OVERRIDE

/*--------------------------------------------------------------------------------------
*
*	nbcupress_theme_selector_by_user
*
*	@desc Sets up the connection between DEV users and their corresponding theme folder
*	@author Scott Nath
*	@since 1.0

		NOTE: THIS SECTION SHOULD BE REMOVED FROM ALL NON-DEV wp-config.php FILES

* 
*-------------------------------------------------------------------------------------*/
/*
planning to depreciate
still functional if needed - July 18, 2012
if ( ! function_exists( 'nbcupress_theme_selector_by_user' ) ){
	function nbcupress_theme_selector_by_user($user_login){
		if ( 'dev.nbcupress.example.com' == $_SERVER['HTTP_HOST'] ) {
			switch( $user_login ) {
				case 'snath':
					define( 'SB_FORCE_THEME', 'dev_theme_1' );
					break;
				case 'rrasaiyan':
					define( 'SB_FORCE_THEME', 'dev_theme_2' );
					break;
				case 'gvorbeck':
					define( 'SB_FORCE_THEME', 'dev_theme_3' );
					break;
			}
		}
	}
}
*/

/*********************************/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
