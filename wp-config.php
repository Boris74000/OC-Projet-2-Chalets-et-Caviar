<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
define( 'DB_NAME', 'dbs811853' );

/** MySQL database username */
define( 'DB_USER', 'dbu272221' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wzSfBzfsHFSURrDfNEFz' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000927687.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '7QOD5WPys-^FmvOUm]99?ld+w8(I[[!FMbdTAxOvf&1sITm>.Jz?(v&c%zE:I3],' );
define( 'SECURE_AUTH_KEY',   'Q5n>XTT4sXQ&cS,ot,t}#Z|z0.{O-CY/+lU!}xE_8q| :0n]>0kRwPulx <RvVY>' );
define( 'LOGGED_IN_KEY',     'Jd!ki{;:g)!H4n9!+ D-Wg>]]My<<_}v?Rplt {EZ;vN0H%?_~VEb*2;vWaOsL7 ' );
define( 'NONCE_KEY',         '5k1T:C.X/CvvIPv`+w>E)~)Lu/xOvAt2+D@IPx]}nJ`c!@0{jvDxn<EPY8a-|^ov' );
define( 'AUTH_SALT',         '8qdrdyHRA`,uIy/4.K:.Z@PJ|k,H~t~&egodtx95|{$B2Byd1rXK6{4 #./:-_Gi' );
define( 'SECURE_AUTH_SALT',  '{u`<_.urq (k!/[O_*IMP;z~?1ie+ENd@@o<EB/#}$XY77r$ugJ$P}WXPsl[s{Z}' );
define( 'LOGGED_IN_SALT',    '1,_0,I1Hoeme$)0vNQ^*h)fSHNqgy+yyvEYKfg~cK51<IoUqs7gyYAh(iU{[wMQ{' );
define( 'NONCE_SALT',        'qB_?g&YGe!?6khkk,H1j]R?ojye&[eHU+C(LHC;ZeNz>3e-K`~R<ZrbBe-;+.?pW' );
define( 'WP_CACHE_KEY_SALT', '-`{Flug~([z[>K}I[p`s%wnPv{AwhkP|A7)~s6DwP%iv|a9 %GCA]FDuK5v(|>Xc' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'LNUYwpqr';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
