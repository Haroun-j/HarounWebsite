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
define( 'DB_NAME', 'github_db' );

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
define( 'AUTH_KEY',         't(,>qM>GJM`,5Q+L>_L)G(x5t4I*q,k$[;S4iFE0D*%7E#@;-amsa$2S.W{}K`B4' );
define( 'SECURE_AUTH_KEY',  'Abh]nTS^f8&g5Urxw;eW|E.t6|Ro.w>UPR:NT~XHd%8sAStL| !drtd:W|~^Wgp_' );
define( 'LOGGED_IN_KEY',    'Cx<1h7B-qKEAy$sFxNJtF8c&8L%6b)G8uUsA<#Z/QmQ6zjE%%eclk[be.N)i=(y`' );
define( 'NONCE_KEY',        '2)3AZ25p*GyW$Qvhcx+Z~,jU%$^yV5w$aHp-A>#~io0F0,<xr4e9~PHgHMp`DOW~' );
define( 'AUTH_SALT',        '{02GO)1n2bPOvg=O+n>=~dqz~<hM<h5CYOC-wY:rsVULCf~p/N>|VJ,vaI+0!d.J' );
define( 'SECURE_AUTH_SALT', '!l9}+M1i=&kgD9<%fYk}#rvMn.EKs8N8%EGQr=0Qzbx$l2e{L:7;r+MND=3]8DZ-' );
define( 'LOGGED_IN_SALT',   'D`ooV%OWX.KnkEWMTH@9Kn:5EVeukGC!>9tl%64&}T8!pzr66YMOrRnW;p46LCJf' );
define( 'NONCE_SALT',       'o-]0ESH:dxAS2hCNF~5+}7V$:f0:[dli5;k7Y;&h)N,uNsCy)`N_)E-N_LL*Q}p7' );
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
