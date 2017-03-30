<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'gcm');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '[sP<<L;Q0jBjn(,w79HZx&@YKOII%lT-=|x>EDXl[j15-ZcL&U6m@Ic>u<jotAWI');
define('SECURE_AUTH_KEY', 'M6hB9|||x#q *Q092(NWa|pT{]HS$tv1TROb5P$SQE27(I>S3|Q$=aS[iQaJV^zp');
define('LOGGED_IN_KEY', 'i2*),KeMgM z@V.Bu{yi{_r/d/9oyM6D9e#.xV=yEac&;Q@Ygcl50k-}6m(C_?Rr');
define('NONCE_KEY', '}XLMYOolqjZJW1/?HH}t/eH.PvP}7rmnw#$MuO_t{;nljg+8nt:^6J4R$w2NUR49');
define('AUTH_SALT', ',koG4cGT>OR6;p;:/}F{Xlu.yus%RH@~IpBy X?d(.HgZDrN!oZqp3:`%BK?x%rf');
define('SECURE_AUTH_SALT', 'Q!YDg<f4lvmA?tLt$K&1:X3z>F(>.w>ctw kNOO(*h]QoQE3~yjJIj8z?SZOb$>!');
define('LOGGED_IN_SALT', ']^Jc$nP:H3).d,eLthGpr[qBgA!P#I#9kdRrE ~An[=s?co<cv5j,/Kay@@j4e,S');
define('NONCE_SALT', '9=p<A/_qa];xYThfp(|.k:tq/|kx(]CZf;yd= nB=l0~VhwKH*rA7J7}ppmfw]Ej');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

