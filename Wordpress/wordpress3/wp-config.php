<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')DV$)0r>:G}-mrie_#.z~foO0%YuvNunq2>szLUZ!Fl&sb!Xl8kgfo)4E`*xBZnM' );
define( 'SECURE_AUTH_KEY',  '=JLk=mVr)~3[-Hc}w@OSE#oQJ|UIA7E W9xvoJ-Dl@n@}y>:>7]XbW[Wq*Yo ,LR' );
define( 'LOGGED_IN_KEY',    'u0=HW;I18m![YHHAqXz2mx_U@o,f=V`&s,c/`m=2@@-k,3h<fiZ:_QT]oJ(=glpb' );
define( 'NONCE_KEY',        'R/-@nC$F]P$ aIZ7>x,TV3zv(#+~V@gKp_$%ryCCPnt!*f(D3j -r^_#xT,/K+~^' );
define( 'AUTH_SALT',        'E~xU(19#YSdGXcpl</]v_yge!(`DHZ2EwuV0dFeQ6p[4.c0ea7fFzpHrwu95EdsR' );
define( 'SECURE_AUTH_SALT', 'Q!K^|U2iURE1i<36;u{X<|v_D3hireOgONj2VgH3fjI,To2#9T;=Sq$09?vGus{S' );
define( 'LOGGED_IN_SALT',   '~b`:};n%Av|k=1]1Gm7jxYPjrWmR.[La c8n [MTcWV0hoN=CYr@azEQ,YUJmEpv' );
define( 'NONCE_SALT',       ']uM{ae(:_(kdT,{-|k xiLUeHdnZ>8GmF:ZEwrfz8&k:@&,ri-W, Id3l<i~vyKt' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
